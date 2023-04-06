<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\PostResource;
use App\Models\About;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Company;
use App\Models\Feedback;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function company()
    {
        $company = Company::first();
        return new CompanyResource($company) ;
    }

    public function categories()
    {

        $categories = Type::with('posts')->get();
        return CategoryResource::collection($categories) ;
    }

    public function addToCard(Request $request)
    {
        $cart = new Cart();
    }

    public function getPosts()
    {
        $posts = Post::all();
        return PostResource::collection($posts);
    }

    public function getPoems()
    {
        $type = Type::where('slug','poems')->first();
        $posts = Post::where('type_id',$type->id)->get();
        return PostResource::collection($posts);

    }

    public function getStories()
    {
        $type = Type::where('slug','stories')->first();
        $posts = Post::where('type_id',$type->id)->get();
        return PostResource::collection($posts);

    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $posts = Post::where('tags','like','%'.$query.'%')->orWhere('title','like','%'.$query.'%')->get();
        return PostResource::collection($posts);
    }

    public function getAbout()
    {

        $about = About::first();
        return new AboutResource($about) ;
    }

    public function feedback(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->save();
        return response()->json(['message' => 'Thank you for your feedback']);
    }
}
