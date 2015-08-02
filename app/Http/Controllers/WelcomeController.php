<?php

namespace App\Http\Controllers;
use App\Ward;

class WelcomeController extends Controller {

    public function __construct()    {
        //$this->middleware('guest');
    }

    public function wards() {
      $wards = Ward::where('subcounty_id', \Input::get('subcounty'))->get();
      return $wards;
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()   {
      $services = \DB::table('FeaturedServices')->get(['Title', 'ShortDecsription']);
      return view('welcome', ['services' => $services]);
    }
}
