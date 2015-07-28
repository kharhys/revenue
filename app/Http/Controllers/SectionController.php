<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list sections
    public function index() {
      dd($this->sections);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating section
    public function create() {
      dd($this);
      return view('sections.create');
    }

    #  Show the form for editing the specified resource. Embeds section object.
    public function edit($id)
    {
      if (is_null($this->section)) {
        return redirect('sections');
      }
      return view('sections.edit', compact_property($this, 'section'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
      //dd($this);
        $this->section->fill($this->params['section']);
        if ($this->section->save()) {
          return redirect()->back()->with('message', 'section Added!');
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
      $this->section->fill($this->params['section']);
      if ($this->section->save()) {
        return redirect()->back()->with('message', 'section Added!');
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
