<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Message;
use App\User;

class ProfileController extends Controller
{
    //
    /**
     * Check user and return the chat view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private $data;
    public function __construct(){

    }
    public function index() {
        if($user = Sentinel::check()) {
            /*
             * Update user online status
             */
            if(\GeneralHelper::markOnlineStatus($user->id, 'Online')) {
                $this->data['user'] = $user;
                $this->data['members'] = User::where('id', '!=', $user->id)->get();
                $this->data['showChatBar'] = true;
                return view('front.profile.index', $this->data);
            }
        }
        else {
            abort(404);
        }

    }
    public function hubInfo() {
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
