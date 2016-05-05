<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    
    
    public function about()
    {
        $first = 'Tim';
        $last = 'Tim2';


        return view('pages.about', compact('first', 'last'));
    }

    public function services()
    {
        return view('pages.services');
    }

    public function pricing()
    {
        return view('pages.pricing');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
