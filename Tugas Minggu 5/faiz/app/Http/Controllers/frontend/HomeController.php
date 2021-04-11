<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request,
App\Http\Controller\Controller;

class HomeController extends Controller
{
    public function index()
    {
       return view('frontend.home')
    }

}
