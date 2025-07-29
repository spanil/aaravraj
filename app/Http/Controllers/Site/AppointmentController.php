<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class AppointmentController extends Controller
{
   
    public function index()
    {
        return view('web.appointment.index');
    }
}
