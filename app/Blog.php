<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
