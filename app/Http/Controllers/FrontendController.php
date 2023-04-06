<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    function description(Request $request)
    {
        // return $request->all();
        $price = $request->price;
        $item = Post::where('id', $request->product_id)->first();
        return view('cart.pay', compact('item', 'price'));
    }

    public function getMySale()
    {
        $purchases = Purchase::all();
        return view('admin.transaction.index', compact('purchases'));
    }

    public function post($id)
    {
        $post = Post::find($id);
        $comments = Comment::orderBy('created_at', 'desc')->where('post_id', $id)->get();
        $likes = Like::where('post_id', $id)->count();
        return view('frontend.post', compact('post', 'comments', 'likes'));
    }

    public function commentStore(Request $request)
    {
        // dd($request->all());
        $data = new Comment();
        $data->post_id = $request->post_id;
        $data->user_id = Auth::user()->id;
        $data->comment = $request->comment;
        $data->save();
        return redirect()->back();
    }

    public function likeStore(Request $request)
    {
        // dd($request->all());
        $likes = Like::where('user_id', Auth::user()->id)->where('post_id', $request->post_id)->first();
        if ($likes) {
            $likes->delete();
            return redirect()->back();
        } else {
            $data = new Like();
            $data->post_id = $request->post_id;
            $data->user_id = Auth::user()->id;
            $data->save();
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $posts = Post::where('tags', 'like', '%' . $query . '%')->orWhere('title', 'like', '%' . $query . '%')->get();
        return view('frontend.search', compact('posts'));
    }
}
