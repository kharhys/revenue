<?php

namespace App\Http\Controllers;

use App\ServiceApplication;

class DashboardController extends Controller {

    # ensure log in
    public function __construct() {
        $this->middleware('auth');
        $this->currentUser = \Auth::User();
    }

    # render dashboard
    public function index() {
      $applications = \DB::table('ServiceHeader')
            ->where('ServiceHeader.CustomerID', $this->currentUser->agentAccount->id)
            ->join('Services', 'ServiceHeader.ServiceID', '=', 'Services.ServiceID')
            ->join('ServiceStatus', 'ServiceHeader.ServiceStatusID', '=', 'ServiceStatus.ServiceStatusID')
            ->select('ServiceHeader.*', 'Services.ServiceName', 'ServiceStatus.ServiceStatusName')
            ->get();
        return view('dashboard.index', ['applications' => $applications]);
    }

    # config app
    public function getSwap($account) {
      $ac = \App\Account::findOrFail($account);
      $this->currentUser->agent_account_id = $ac->id;
      $this->currentUser->save();
      return redirect()->back()->with('message', 'Changed Account!');
    }

    # render dashboard
    public function getBusinesses() {
        return view('dashboard.businesses', ['businesses' => $this->currentUser->businessAccounts ]);
    }

    # render dashboard
    public function getPlots() {
        $plots = \App\Plot::where('account_id', $this->currentUser->agent_account_id)->get();
        return view('dashboard.plots', ['plots' => $plots ]);
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
