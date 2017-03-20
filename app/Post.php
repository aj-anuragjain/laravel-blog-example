<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
        "post_title",
        "user_id",
        "custom_url"
    ];

    public function post_detail(){
        return $this->hasOne("App\PostDetail");
    }

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function comments(){
        return $this->hasMany("App\Comment");
    }

    public function meta(){
        return $this->hasOne("App\MetaTag");
    }
}
