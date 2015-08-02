<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeeController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list fees
    public function index() {
      dd($this);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the fee for creating fee
    public function create() {
      return view('fees.create');
    }


    public function edit($id)
    {
      $this->fee = \App\fee::findorFail($id);
      if (is_null($this->fee)) {
        return redirect('fees');
      }
      return view('fees.edit', compact_property($this, 'fee'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->fee->fill($this->params['fee']);
        if ($this->fee->save()) {
          return redirect()->back()->with('message', 'fee Added!');
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
      $this->fee->fill($this->params['fee']);
      if ($this->fee->save()) {
        return redirect()->back()->with('message', 'fee Added!');
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
