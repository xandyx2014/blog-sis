<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Post::truncate();
        \App\Category::truncate();
        $category = new \App\Category();
        $category->name = "categoria 1";
        $category->save();
        $category = new \App\Category();
        $category->name = "categoria 2";
        $category->save();
        $post = new \App\Post();
        $post->title = "Mi primer post";
        $post->excerpt = "execerpt";
        $post->body = "lorem ipsum dolor";
        $post->published_at = \Carbon\Carbon::now()->subDay(2);
        $post->category_id = 1;
        $post->save();
        $post = new \App\Post();
        $post->title = "Mi segundo post";
        $post->excerpt = "execerpt";
        $post->body = "lorem ipsum dolor";
        $post->published_at = \Carbon\Carbon::now()->subDay(1);
        $post->category_id = 2;
        $post->save();
        $post = new \App\Post();
        $post->title = "Mi tercero post";
        $post->excerpt = "execerpt";
        $post->body = "lorem ipsum dolor";
        $post->published_at = \Carbon\Carbon::now()->subDay(3);
        $post->category_id = 1;
        $post->save();
    }
}
