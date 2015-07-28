<?php namespace App\Http\Controllers;

use App\Service;
use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApplicationFormRequest;

class ApplicationController extends Controller {

    public function __construct() {
      $this->middleware('auth');
      $this->currentUser = \Auth::user();
      $this->loadAndAuthorizeResource();
    }

    # list applications
    public function index() {
      dd($this->applications);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating applications
    public function create() {

      $props = [];
      $props['user'] = $this->currentUser;
      $props['account'] = $this->currentUser->agentAccount;
      $props['service'] = Service::find($this->params['service_id']);
      return view('applications.create', ['params' => $props ]);
    }

    #  Show the form for editing the specified resource. Embeds applications object.
    public function edit($id)
    {
      if (is_null($this->applications)) {
        return redirect('applications');
      }
      return view('applications.edit', compact_property($this, 'applications'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ApplicationFormRequest $request)
    {
        $this->applications->fill($this->params['applications']);
        if ($this->applications->save()) {
          return redirect()->back()->with('message', 'applications Added!');
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
      $this->applications->fill($this->params['applications']);
      if ($this->applications->save()) {
        return redirect()->back()->with('message', 'applications Added!');
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
