<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class PageController extends Controller
{
   
    public function aboutUs()
    {
        return view('web.page.about_us');
    }
}
