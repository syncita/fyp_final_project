<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\Request;

class FrontendlayoutController extends Controller
{
    public function home()
    {
        $type = Type::where('slug','poems')->first();
        $poems = Post::where('type_id',$type->id)->get();


        $type1 = Type::where('slug','stories')->first();
        $stories = Post::where('type_id',$type1->id)->get();

        return view('frontend.home',compact('poems','stories'));
    }

    public function about()
    {
        $about = About::all();
        return view('frontend.about',compact('about'));
    }

    public function poem()
    {
        $type = Type::where('slug','poems')->first();
        $poems = Post::where('type_id',$type->id)->get();
        return view('frontend.poem',compact('poems'));
    }

    public function stories()
    {
        $type = Type::where('slug','stories')->first();
        $stories = Post::where('type_id',$type->id)->get();
        return view('frontend.story',compact('stories'));
    }
}
