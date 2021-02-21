<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;
use App\User;

class Friend extends Model
{
    //
    public $timestamp = true;
    protected $table = 'friends';
    public function friendCount($user_id) {
        $model = new Friend;
        return $model->where('active_user', $user_id)->orwhere('passive_user', $user_id)->count();
    }
    public function lastFriendAddTime($user_id) {
        $model = new Friend;
        $created_at = $model->where('active_user', $user_id)->orderby('created_at', 'DESC')->first()->created_at;
        $datetime1 = new DateTime();
        $datetime2 = new DateTime($created_at);
        $difference = $datetime1->diff($datetime2)->d;
        if($difference > 0){
            if($difference == 1)
                return $difference.' Days Ago';
            else
                return $difference.' Day Ago';
        } else {
            $difference = $datetime1->diff($datetime2)->h;
            if($difference > 1)
                return $difference.' Hours Ago';
            else
                return $difference.' Hour Ago';
        }
    }
    public function getFriends($user_id) {
        $model = new Friend;
        $friends = $model->where('active_user', $user_id)->orwhere('passive_user', $user_id)->get();
        $friend_users = User::whereIn('id', $friends)->paginate(12)->toArray(); 
        var_dump($friend_users);die;
        for($i = 0; $i<count($friend_users); $i++) {
            $id = $friend_users[$i];
            var_dump($id);die;
        }
        return $friend_users;
    }
}
