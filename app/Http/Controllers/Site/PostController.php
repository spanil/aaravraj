<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class PostController extends Controller
{
   
    public function index()
    {
        return view('web.post.index');
    }

    public function detail()
    {
        return view('web.post.detail');
    }
}
