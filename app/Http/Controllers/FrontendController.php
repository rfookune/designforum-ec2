<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontendController extends Controller
{
    public function home()
    {
    	return view('frontend.home.index');
    }

    public function contact()
    {
    	return view('frontend.contact');
    }

    public function faq()
    {
    	return view('frontend.faq');
    }

    public function portfolio()
    {
    	return view('frontend.portfolio.index');
    }

    public function project($slug)
    {
    	return view('frontend.project');
    }

    public function team()
    {
    	return view('frontend.team');
    }
}
