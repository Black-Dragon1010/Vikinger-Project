<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    //
    public $timestamp = true;
    protected $table = 'friends';
    public function friendCount($user_id) {
        $model = new Friend;
        return $model->where('active_user', $user_id)->orwhere('passive_user', $user_id)->count();
    }
}
