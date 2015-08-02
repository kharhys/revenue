<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BusinessProfile;
use App\ServiceApplication;

class AccountController extends Controller {

    public function __construct() {
      $this->middleware('auth');
      $this->currentUser = \Auth::user();
      $this->loadAndAuthorizeResource();
    }

    # list accounts
    public function index() {
      dd($this->accounts);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating account
    public function create() {
      return view('accounts.create');
    }

    #  Show the form for editing the specified resource. Embeds account object.
    public function edit($id)
    {
      if (is_null($this->account)) {
        return redirect('accounts');
      }
      return view('accounts.edit', compact_property($this, 'account'));
    }


    # store new business account
    public function store()
    {
      $this->account->fill($this->params['account']);
      if ($this->account->save()) {

        # store business account profile
        $profile = BusinessProfile::create([
          'code' => $this->params['account']['code'],
          'phone' => $this->params['account']['phone'],
          'email' => $this->params['account']['email'],
          'website' => $this->params['account']['website'],
          'address' => $this->params['account']['address'],
          'service_id' => $this->params['account']['service_id'],
          'department_id' => $this->params['account']['department_id']
        ]);

        $this->account->businessProfile()->save($profile);
        $this->account->users()->sync([$this->currentUser->id], false);

        # submit application for sbp
        $application = ServiceApplication::create([
          'FormID' => 2,
          'ServiceID' => 303,
          'ServiceStatusID' => 1,
          'SubmissionDate' => date('Y-m-d H:i:s'),
          'CustomerID' => $this->currentUser->agentAccount->id
        ]);

        $application->save();

        return redirect('/dashboard/businesses')->with('message', 'Business Account Added!');

        } else {
          dd('error!');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      $this->account->fill($this->params['account']);
      if ($this->account->save()) {
        return redirect()->back()->with('message', 'Account Updated!');
        } else {
          dd('error!');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
