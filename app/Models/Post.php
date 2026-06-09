<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name',
        'content',
        'user_id',
        'is_public'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
