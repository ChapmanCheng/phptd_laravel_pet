<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    private $navs = [
        [
            'href' => '/',
            'display' => 'home',
        ],
        [
            'href' => 'cats',
            'display' => 'cats',
        ],
        [
            'href' => 'dogs',
            'display' => 'dogs',
        ],
    ];

    public function index()
    {
        return view('index', ['navs' => $this->navs]);
    }
    public function cats()
    {
        return view('cats', ['navs' => $this->navs]);
    }
    public function dogs()
    {
        return view('dogs', ['navs' => $this->navs]);
    }
}
