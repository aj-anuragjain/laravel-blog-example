<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostDetail extends Model
{
    protected $fillable = [
        "post_id",
        "post_text",
    ];

    public function post(){
        return $this->belongsTo("App\Post");
    }

}
