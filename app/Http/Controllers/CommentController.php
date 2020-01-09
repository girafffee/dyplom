<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;

class CommentController extends Controller
{

    public function add(Request $request)
    {
    	$comment = new Comment();

    	$comment->text = $request->input('message');
        $comment->post_id = $request->input('post_id');

        $validator = $comment->validate();

        if($validator->fails())
    	{
    		return redirect()->back()
                ->withErrors($validator)
                ->withInput();
    	}
    	else
    	{
    		$comment->save();
    		return redirect()->back();
    	}

    }

    public function ajaxAdd()
    {
        $inputs = $_POST['data'];
        $comment = new Comment();
        $return = array();

        $comment->text = $inputs['text'];
        $comment->post_id = $inputs['id'];

        if(array_key_exists('parent_id', $inputs))
        {
            $comment->parent_id = $inputs['parent_id'];
        }
        $return['comment'] = $comment;
        $validator = $comment->validate();

        if(!$validator->fails())
        {
            $comment->save();
            return view('comments.ajaxview', $return);
        }
    }
}
