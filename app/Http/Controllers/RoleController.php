<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list roles
    public function index() {
      dd($this);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the role for creating role
    public function create() {
      return view('roles.create');
    }


    public function edit($id)
    {
      $this->role = \App\role::findorFail($id);
      if (is_null($this->role)) {
        return redirect('roles');
      }
      return view('roles.edit', compact_property($this, 'role'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->role->fill($this->params['role']);
        if ($this->role->save()) {
          return redirect()->back()->with('message', 'role Added!');
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
      $this->role->fill($this->params['role']);
      if ($this->role->save()) {
        return redirect()->back()->with('message', 'role Added!');
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
