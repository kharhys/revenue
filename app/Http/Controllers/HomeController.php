<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    # ensure log in
    public function __construct() {
        $this->middleware('auth');
    }

    # render dashboard
    public function index() {
        return view('dashboard');
    }

    # config app
    public function config() {
        return view('config');
    }
}
