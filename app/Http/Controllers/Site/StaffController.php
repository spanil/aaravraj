<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class StaffController extends Controller
{
   
    public function index()
    {
        return view('web.staff.index');
    }

    public function detail()
    {
        return view('web.staff.detail');
    }
}
