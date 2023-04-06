<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Post;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $type = Type::where('slug','stories')->first();
        $stories = Post::where('type_id',$type->id)->where('price','!=',null)->where('user_id','!=',Auth::user()->id)->get();

        $type2 = Type::where('slug','poems')->first();
        $poems = Post::where('type_id',$type2->id)->where('price','!=',null)->where('user_id','!=',Auth::user()->id)->get();

        // $carts = Cart::where('user_id',Auth::user()->id)->get();
        // $total = Cart::where('user_id',Auth::user()->id)->count();
        return view('dashboard',compact('stories','poems'));

    }
}
