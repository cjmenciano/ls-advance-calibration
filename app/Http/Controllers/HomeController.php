<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function iso()
    {
        return view('iso');
    }

    public function services()
    {
        return view('services');
    }

    public function qoute()
    {
        return view('qoute');
    }

    public function products()
    {
        return view('products');
    }

    public function trainingprograms()
    {
        return view('trainingprograms');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }
}
