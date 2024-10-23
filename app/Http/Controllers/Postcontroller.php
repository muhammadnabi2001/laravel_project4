<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\post;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function posts()
    {
        $posts=post::all();
        //dd($posts);
        return view('/posts',['posts'=>$posts]);
    }
}
