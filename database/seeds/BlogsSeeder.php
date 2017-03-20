<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\PostDetail;
use App\User;
use App\Comment;
use App\MetaTag;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $user = new User();
        $user->name = $faker->name;
        $user->email = $faker->email;
        $user->password = bcrypt("password");
        $user->is_admin = 1;
        $user->save();

        for($i = 0; $i < 50; $i++){

            $post = new Post();
            $post->post_title = $faker->realText($faker->numberBetween(10, 60));
            $post->custom_url = $this->to_url($post->post_title);
            $user->posts()->save($post);

            $post_detail = new PostDetail();
            $post_detail->post_text = $faker->realText($faker->numberBetween(100, 100000));
            $post->post_detail()->save($post_detail);

            for($k = 0; $k < $faker->numberBetween(1, 10); $k++){

                $comment = new Comment();
                $comment->comment = $faker->realText($faker->numberBetween(50, 1000));
                $comment->post()->associate($post);
                $comment->user()->associate($user);
                $comment->save();
            }

            $meta = new MetaTag();
            $meta->title = $post->post_title;
            $meta->description = $faker->realText($faker->numberBetween(30, 60));
            $meta->keywords = $faker->realText($faker->numberBetween(10, 160));
            $post->meta()->save($meta);
        }
    }

    private function to_url($ctx){

        $ctx_trim = trim($ctx);
        $ctx_lowercase = strtolower($ctx_trim);
        $ctx_split = preg_split("/[\s,]+/", $ctx_lowercase);
        $ctx_url = implode("-", $ctx_split);
        return $ctx_url;
    }
}
