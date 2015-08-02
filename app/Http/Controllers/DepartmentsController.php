<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentsController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list departments
    public function index() {
        return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating department
    public function create() {
      return view('departments.create');
    }

    # store newly created department
    public function store()
    {
      $this->department->fill($this->params['department']);
        if ($this->department->save()) {
          return redirect()->back()->with('message', 'Department Added!');
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

    # Show the form for editing the specified resource.
    public function edit($id)
    {
      if (is_null($this->department)) {
        return redirect('departments');
      }
      return view('departments.edit', compact_property($this, 'department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      $this->department->fill($this->params['department']);
      if ($this->department->save()) {
        return redirect()->back()->with('message', 'Department Updated!');
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
