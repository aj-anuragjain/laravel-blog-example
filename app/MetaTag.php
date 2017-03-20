<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    protected $table = "meta_tags";

    protected $fillable = [
        "title",
        "description",
        "keywords",
        "post_id"
    ];

    public function post(){
        return $this->belongsTo("App\Post");
    }
}
