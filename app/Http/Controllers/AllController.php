<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class AllController extends Controller
{
    public function index(Request $request, Response $response){
        $posts = Post::orderBy("updated_at", "desc")->take(10)->get();

        foreach($posts as $post){

            $post->last_comment = $post->comments()->orderBy("updated_at", "desc")->first();
            $post->post_detail = $post->post_detail()->first();
            $post->user = $post->user()->first();
        }

        return view("public.home", [
            'posts' => $posts
        ]);

        //testing json response
        //return response()->json($posts, 200);
    }


    public function posts(){
        $posts = Post::orderBy("updated_at", "desc")->paginate(10);

        foreach($posts as $post){

            $post->last_comment = $post->comments()->orderBy("updated_at", "desc")->first();
            $post->post_detail = $post->post_detail()->first();
            $post->user = $post->user()->first();
        }

        return view("public.posts", [
            'posts' => $posts
        ]);
    }

    public function redirect(Request $request){
        $post = Post::find($request->blog_id);
        if(!empty($post)){
            $title = $post->custom_url;
            $url = $request->fullUrl();
            return redirect($url.'/'.$title);
        }
        return view("errors.404");
    }

    public function detail(Request $request){

        $post_id = $request->blog_id;
        $post = Post::find($post_id)->first();

        if(!empty($post)){
            $post->comments = $post->comments()->orderBy("updated_at", "desc")->get();
            $post->post_detail = $post->post_detail()->first();
            $post->user = $post->user()->first();
            $post->meta = $post->meta()->first();

            return view("public.detail", [
                "post" => $post
            ]);
        }
        return view("errors.404");
    }
}
