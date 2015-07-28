<?php

namespace App\Http\Controllers;

class DashboardController extends Controller {

    # ensure log in
    public function __construct() {
        $this->middleware('auth');
        $this->currentUser = \Auth::User();
    }

    # render dashboard
    public function index() {
        return view('dashboard.index');
    }

    # render dashboard
    public function getBusinesses() {
        return view('dashboard.businesses', ['businesses' => $this->currentUser->businessAccounts ]);
    }

    # render dashboard
    public function getProfile() {
        return view('dashboard.profile', [ 'user' => $this->currentUser ]);
    }

    # config app
    public function getConfig() {
        return view('config');
    }
}
