<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("meta_tags", function (Blueprint $table){
            $table->increments("id");
            $table->timestamps();
            $table->string("title");
            $table->string("description");
            $table->text("keywords");
        });

        Schema::table("meta_tags", function(Blueprint $table){
            $table->integer("post_id")->unsigned();
            $table->foreign("post_id")->references("id")->on("posts")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("meta_tags");
    }
}
