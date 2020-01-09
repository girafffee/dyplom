<?php

namespace App\Http\Controllers;

use App\PagesWatch;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Voyager;

class PostController extends Controller
{
    const ALIAS = 'post';
    const ALL_NEWS = 'all';
    /**
     * Display the specified resource.
     *
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    /*public static function sortComments($parents, $childs)
    {
        foreach ($parents as $parent)
        {
            foreach ($childs as $child)
            {
                if($child->parent_id == $parent->id)
                {
                    $parent->child = $child;
                }
                else
                {
                    self::sortComments();
                }
            }
        }

    }*/

    public function showSingle($slug, Request $request)
    {
        $return = array();
        $post = Post::where('slug', $slug)->first();
        $comments = $post->comments()
            ->where('parent_id', 0)
            ->orderBy('created_at', 'DESC')
            ->get();

        $children = $post->comments()
            ->where('parent_id', '>', 0)
            ->get();

        $comments->count = count($comments) + count($children);
        $return['comments'] = $comments;
        $return['children'] = $children;

        if($post == NULL)
        {
            return abort('404');
        }

        $header_style = 'background-image: url('. route('home') .'/img/post-6.jpg' . ');';
        $return['header_style'] = $header_style;

        $post->image = Voyager::image($post->image);
        $return['post'] = $post;


        $watch_item = new PagesWatch();
        $watch_item->setWatch($request, [
            'object_alias' => self::ALIAS,
            'object_id' => $post->id
        ]);

        return view("posts.single", $return);
    }

    public function showCategory($category = NULL)
    {
        if($category == self::ALL_NEWS || $category == NULL)
        {
            $posts = Post::orderBy('created_at', 'DESC')->paginate(6);
            return view('posts.all-paginate', ['posts' => $posts]);
        }

        $category = Category::where('slug', $category)
            ->first();

        $posts = $category->posts()
            ->paginate(3);


        return view('posts.all-paginate', ['posts' => $posts, 'category' => $category]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return 0;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
