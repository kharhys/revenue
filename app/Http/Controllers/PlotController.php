<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BusinessProfile;

class PlotController extends Controller {

    public function __construct() {
      $this->middleware('auth');
      $this->currentUser = \Auth::user();
      $this->loadAndAuthorizeResource();
    }

    # list plots
    public function index() {
        return view('plots.index')->with('plots', $this->plots);
    }

    # show the form for creating plot
    public function create() {
      return view('plots.create',['agentaccount' => $this->currentUser->agentAccount]);
    }

    #  Show the form for editing the specified resource. Embeds plot object.
    public function edit($id)
    {
      if (is_null($this->plot)) {
        return redirect('plots');
      }
      return view('plots.edit', compact_property($this, 'plot'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      $this->plot->fill($this->params['plot']);

      if ($this->plot->save()) {

        $profile = BusinessProfile::create([
          'code' => $this->params['plot']['code'],
          'phone' => $this->params['plot']['phone'],
          'email' => $this->params['plot']['email'],
          'website' => $this->params['plot']['website'],
          'address' => $this->params['plot']['address'],
          'service_id' => $this->params['plot']['service_id'],
          'department_id' => $this->params['plot']['department_id']
        ]);

        $this->plot->businessProfile()->save($profile);
        $this->plot->users()->sync([$this->currentUser->id], false);

        return redirect()->back()->with('message', 'plot Added!');

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
      $this->plot->fill($this->params['plot']);
      if ($this->plot->save()) {
        return redirect()->back()->with('message', 'plot Added!');
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
