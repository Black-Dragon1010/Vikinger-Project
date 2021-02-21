<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    //
    public $timestamp = false;
    protected $table = 'resumes';
    public function friendCount($user_id) {
        $model = new Friend;
        return $model->where('active_user', $user_id)->orwhere('passive_user', $user_id)->count();
    }
    public function arrangeResume($user_id) {
        $model = new Resume;
        return $model->where('user_id', $user_id)->orderby('end', 'DESC')->get();
    }

}
