<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class Blog extends Model
{
    protected $guarded = [];

    protected $casts = [
        'body' => 'json',
        'blocks' => 'json'
    ];
    /**
     * A blog belongs to a user
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
    * A blog belongs to a category
    *
    */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Has-many relation with comments
     */
    public function comments() {
        return $this->hasMany(Comment::class, 'blog_id');
    }

    public function getThreadedReplies() {
        return $this->comments()->with('user')->get()->threaded();
    }
    // Julia added part
    public function userPostNumber($user_id) {
        
        $blog_model = new Blog;
        try {
            $blog_count = $blog_model->where('user_id', $user_id)->count();
            return $blog_count;
            
        } catch (\Exception $e) {
            $data = [
                'type' => 'error',
                'message' => $e->getMessage(),
                'data' => null,
                'code' => 500
            ];
            return response()->json($data,500);
        }
    }
    public function lastPostUpdateTime($user_id) {
        $model = new Blog;
        $updated_at = $model->where('user_id', $user_id)->orderby('updated_at', 'DESC')->first()->updated_at;
        $datetime1 = new DateTime();
        $datetime2 = new DateTime($updated_at);
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
    
}
