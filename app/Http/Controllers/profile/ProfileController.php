<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\blog\BlogAPIController;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Message;
use App\User;
use App\Blog;
use App\Friend;
use App\Resume;
use App\Comment;

class ProfileController extends Controller
{
    //
    /**
     * Check user and return the chat view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private $data;
    private $blog_model;
    private $friend_model;
    private $editable;
    private $user_model;
    private $resume_model;
    private $comment_model;
    public function __construct(){
        $this->blog_model = new Blog;
        $this->friend_model = new Friend;
        $this->user_model = new User;
        $this->resume_model = new Resume;
        $this->comment_model = new Comment;
        
    }
    public function index($user_id, Request $request) {
        if(isset($user_id)){
            
            // create visit log to database only when the ip address is new
            $this->createLog($user_id, $request);
            
            if($user = Sentinel::check()) {
                /*
                 * Update user online status
                 */
                if(\GeneralHelper::markOnlineStatus($user->id, 'Online')) {
                    $this->data['user'] = $user;
                                        
                }
            }
            else {
                $this->data['user'] = $this->user_model->find($user_id);
            }
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['showChatBar'] = true;
            $this->data['blog_count'] = $this->blog_model->userPostNumber($user_id);
            $this->data['friend_count'] = $this->friend_model->friendCount($user_id);
            $this->data['resume'] = $this->resume_model->arrangeResume($user_id);
            $this->data['last_friend_added'] = $this->friend_model->lastFriendAddTime($user_id);
            $this->data['last_post_updated'] = $this->blog_model->lastPostUpdateTime($user_id);
            $this->data['most_commented_post'] = $this->comment_model->getMostCommentedPost($user_id);
            return view('front.profile.index', $this->data);
        } else {
            abort(404);
        }
    }
    public function hubInfo($user_id) {
    	if($user = Sentinel::check()) {
            /*
             * Update user online status
             */
            if(\GeneralHelper::markOnlineStatus($user->id, 'Online')) {
                $this->data['user'] = $user;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                $this->data['showChatBar'] = true;
                return view('front.profile.hub-profile-info', $this->data);
            }
        }
        else {
            //abort(404);
            return redirect('/authentication/login');
        }
    }
    public function getTimeLine($user_id, Request $request) {
        if(isset($user_id)){
            // create visit log to database only when the ip address is new
            $this->createLog($user_id, $request);
            
            if($user = Sentinel::check()) {
                /*
                 * Update user online status
                 */
                if(\GeneralHelper::markOnlineStatus($user->id, 'Online')) {
                    $this->data['user'] = $user;
                                        
                }
            }
            else {
                $this->data['user'] = $this->user_model->find($user_id); 
            }
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['showChatBar'] = true;
            $this->data['blog_count'] = $this->blog_model->userPostNumber($user_id);
            $this->data['friend_count'] = $this->friend_model->friendCount($user_id);
            return view('front.profile.timeline', $this->data);
        } else {
            abort(404);
        }
    }
    public function getFriendList($user_id, Request $request) {
        if(isset($user_id)){
            
            // create visit log to database only when the ip address is new
            $this->createLog($user_id, $request);
            
            if($user = Sentinel::check()) {
                /*
                 * Update user online status
                 */
                if(\GeneralHelper::markOnlineStatus($user->id, 'Online')) {
                    $this->data['user'] = $user;  
                }
            }
            else {
                $this->data['user'] = $this->user_model->find($user_id); 
            }
            $this->data['members'] = User::where('id', '!=', $user->id)->get();
            $this->data['showChatBar'] = true;
            $this->data['blog_count'] = $this->blog_model->userPostNumber($user_id);
            $this->data['friend_count'] = $this->friend_model->friendCount($user_id);
            $this->data['friend_list'] = $this->friend_model->getFriends($user_id);
            
            return view('front.profile.friends', $this->data);
        } else {
            abort(404);
        }
    }
    public function uploadAvatar(Request $request) {
        if($user = Sentinel::check()) {
            if($request->hasFile('file')) {
                $file = $request->file('file');
                //you also need to keep file extension as well
                //$name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
                $name = $this->generateRandomString(20).'.'.$file->getClientOriginalExtension();
                //using the array instead of object
                $image['filePath'] = $name;
                $file->move(public_path().'/uploads/user_images/', $name);
                $user->thumbnail= '/uploads/user_images/'. $name;
                $user->save();
                $res = ['token' => csrf_token(), 'message'=>"success"];
                echo json_encode($res);
            }
        }
    }
    public function uploadCover(Request $request) {
        if($user = Sentinel::check()) {
            if($request->hasFile('file')) {
                $file = $request->file('file');
    
                //you also need to keep file extension as well
                //$name = $file->getClientOriginalName().'.'.$file->getClientOriginalExtension();
                $name = $this->generateRandomString(20).'.'.$file->getClientOriginalExtension();
                //using the array instead of object
                $image['filePath'] = $name;
                $file->move(public_path().'/uploads/user_images/', $name);
                $user->image= '/uploads/user_images/'. $name;
                $user->save();
                $res = ['token' => csrf_token(), 'message'=>"success"];
                echo json_encode($res);
            }
        }
    }
    public function createLog($user_id, Request $request){
        $visit_ip = $request->ip();
        $visit_log = DB::table('visit_log')->where('user_id', $user_id)->where('ip_address', $visit_ip)->count();
        if($visit_log > 0){//already exists
            //ignore
        } else {
            //create log and increase the visit_count in 'users' table
            DB::table('visit_log')->insert(['ip_address'=>$visit_ip, 'user_id'=>$user_id]);
            $this->user_model->find($user_id)->increment('visit_count');
        }
    }
    public function generateRandomString($length=20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
