<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.home');
    }

    public function shopper()
    {
        return view('website.shop');
    }

    public function details()
    {
        return view('website.product-details');
    }

    public function card()
    {
        return view('website.shop-card');
    }

    public function checkout()
    {
        return view('website.checkout');
    }

    public function blogDetails()
    {
        return view('website.blog-details');
    }

    public function blogMain()
    {
        return view('website.blog');
    }


    public function contact()
    {
        return view('website.contact');
    }
}
