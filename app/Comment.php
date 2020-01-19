<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'comment_by', 'post_id'
    ];

    public function commentBy()
    {
        return $this->belongsTo(User::class, 'comment_by');
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
