<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PaymentCategory;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::where('user_id',Auth::user()->id)->get();
        return view('post.index',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $payment = PaymentCategory::all();
        $type = Type::all();
        return view('post.create',compact('category','payment','type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->type_id = $request->type_id;
        $post->payment_category_id = $request->payment_category_id;
        $post->price = $request->price;
        $post->tags = $request->tags;
        $post->max_age = $request->max_age;
        $post->user_id = Auth::user()->id;
        uploadImage($request,$post,'image');
        $post->save();
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Post::find($id);
        return view('post.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = Post::find($id);
        $category = Category::all();
        $payment = PaymentCategory::all();
        $type = Type::all();
        return view('post.edit',compact('category','payment','type','article'));
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
        $post =  Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category_id = $request->category_id;
        $post->type_id = $request->type_id;
        $post->payment_category_id = $request->payment_category_id;
        $post->price = $request->price;
        $post->tags = $request->tags;
        $post->max_age = $request->max_age;
        $post->user_id = Auth::user()->id;
        uploadImage($request,$post,'image');
        $post->update();
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('article.index');
    }
}
