<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocketController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list dockets
    public function index() {
      dd($this);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the docket for creating docket
    public function create() {
      return view('dockets.create');
    }


    public function edit($id)
    {
      $this->docket = \App\docket::findorFail($id);
      if (is_null($this->docket)) {
        return redirect('dockets');
      }
      return view('dockets.edit', compact_property($this, 'docket'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->docket->fill($this->params['docket']);
        if ($this->docket->save()) {
          return redirect()->back()->with('message', 'Docket Added!');
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
      $this->docket->fill($this->params['docket']);
      if ($this->docket->save()) {
        return redirect()->back()->with('message', 'docket Added!');
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
