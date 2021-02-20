<?php

namespace App\Http\Controllers\chat;

use App\Events\ChatCreated;
use App\Events\ChatInitiationRequest;
use App\Events\UserIsOnline;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DefaultController;
use App\Message;
use App\User;
use App\Friend;
use App\Blog;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ChatController extends DefaultController
{

    /**
     * Check user and return the chat view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    private $blog_model;
    private $friend_model;
    private $user_model;
    public function __construct(){
        $this->blog_model = new Blog;
        $this->friend_model = new Friend;
        $this->user_model = new User;
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
                $this->data['blog_count'] = $this->blog_model->userPostNumber($user->id);
                $this->data['friend_count'] = $this->friend_model->friendCount($user->id);
                return view('front.user.timeline', $this->data);
            }
        }
        else {
            //abort(404);
            return redirect('/authentication/login');
        }

    }

    /**
     * Get all user messages
     */
    public function getUserMessages(Request $request) {
        return Message::with('user')->get();
    }

    public function initiateRequest(Request $request) {
        $user = Sentinel::getUser();
        if($user->id == 1) {
            ChatInitiationRequest::dispatch(2);
        } else {
            ChatInitiationRequest::dispatch(1);
        }
    }

    public function insertChat(Request $request) {
        $user = Sentinel::getUser();
        $this->data['user'] = Sentinel::check() ? Sentinel::getUser() : null;
        $this->data['messages'] = [];
        $message = $request->get('message');
        array_push($this->data['messages'], $message);
        if($user->id == 1) {
            event(new ChatCreated(2, $message));
        } else {
            event(new ChatCreated(1, $message));
        }

    }
}
