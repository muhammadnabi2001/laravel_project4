<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $models=category::all();
        //dd($models);
        return view('index',['models'=>$models]);
    }
}
