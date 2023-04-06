<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function adminDashboard()
    {
        $type = Type::where('slug','stories')->first();
        $stories = Post::where('type_id',$type->id)->get();
        $totalStories = $stories->count();

        $type1 = Type::where('slug','poems')->first();
        $poems = Post::where('type_id',$type1->id)->get();
        $totalPoems = $poems->count();

        $feedback = Feedback::orderBy('created_at','desc')->get();
        return view('admin.dashboard',compact('totalStories','totalPoems','feedback'));

    }
}
