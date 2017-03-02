<?php
namespace App\Http\Controllers;

use Illuminate\Http\request;
use DB;

class BlogPostController extends Controller{

    public function post_detail($id=null)
    {
        if (!$id) return redirect()->route('home');

        //retrieve the right post from the database
        $query=DB::table('blog_posts');
        $query->where('id', '=', $id);
        //first-not collection, just one object
        $blog_post = $query->first();

        $blog_post=\App\BlogPost::find($id);

        $comments=$blog_post->comments;

        dd($comments);
        //3 ways to put values into views
        $detail_view = view ('blog/post_detail', ['id'=>$id]);

        //put the id in the view
        $detail_view->id=$id;
        //or use a function for it
        $detail_view->with('id', $id);
        $detail_view->post=$blog_post;
        return $detail_view;
    }

    public function post_list()
    {
       //retrieve the posts from the database

        $posts=DB::table('blog_posts')
            ->orderBy('id', 'desc')
            ->pluck('title', 'id');

        $list_view = view('blog/post_list');
        $list_view->posts=$posts;
        return $list_view;
    }

    public function add()
    {
        return view('blog/post_add');
    }

    public function handleAdd()
    {

        $submitted_title=request()->input('title', null);
        $submitted_text=request()->input('text', null);
        $new_post_id=DB::table('blog_posts')->insertGetId([
            'title'=>$submitted_title,
            'text'=>$submitted_text
        ]);

        return redirect()->route('post_detail', ['id'=>$new_post_id]);
        //return redirect()->route('add_post');
    }
}

