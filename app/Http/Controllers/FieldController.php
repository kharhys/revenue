<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FieldController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list fields
    public function index() {
      dd($this->fields);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating field
    public function create() {
      dd($this);
      return view('fields.create');
    }

    #  Show the form for editing the specified resource. Embeds field object.
    public function edit($id)
    {
      if (is_null($this->field)) {
        return redirect('fields');
      }
      return view('fields.edit', compact_property($this, 'field'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->field->fill($this->params['field']);
        if ($this->field->save()) {
          return redirect()->back()->with('message', 'field Added!');
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
      $this->field->fill($this->params['field']);
      if ($this->field->save()) {
        return redirect()->back()->with('message', 'field Added!');
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
