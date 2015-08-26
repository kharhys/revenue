<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkflowController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
        $this->currentUser = \Auth::user();
    }

    # list workflows
    public function index() {
      dd($this->currentUser->isCountyEmployee());
      dd($this->workflows);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating workflow
    public function create() {
      return view('workflows.create');
    }

    #  Show the form for editing the specified resource. Embeds workflow object.
    public function edit($id)
    {
      if (is_null($this->workflow)) {
        return redirect('workflows');
      }
      return view('workflows.edit', compact_property($this, 'workflow'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->workflow->fill($this->params['workflow']);
        if ($this->workflow->save()) {
          return redirect()->back()->with('message', 'workflow Added!');
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
    { dd($this);
      $this->workflow->fill($this->params['workflow']);
      if ($this->workflow->save()) {
          return redirect()->back()->with('message', 'Service workflow Updated!');
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
