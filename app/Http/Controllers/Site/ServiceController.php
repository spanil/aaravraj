<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class ServiceController extends Controller
{
   
    public function index()
    {
        return view('web.service.index');
    }

    public function detail()
    {
        return view('web.service.detail');
    }
}
