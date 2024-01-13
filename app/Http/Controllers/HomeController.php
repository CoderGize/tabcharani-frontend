<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{

    private function getLanding()
    {
        $landing = Http::get('http://127.0.0.1:8000/api/get-landing')->json();

        return $landing;
    }

    public function index()
    {
        $landing = $this->getLanding();

        return view('home.landing.home')->with([
            'landing' => $landing,
        ]);
    }

    public function blog()
    {
        return view('home.blog.home');
    }

    public function portfolio()
    {
        return view('home.portfolio.home');
    }

    public function contact()
    {
        return view('home.contact.home');
    }
}
