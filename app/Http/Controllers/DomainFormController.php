<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DomainFormController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list forms
    public function index() {
      dd($this);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating form
    public function create() { dd($this);
      return view('forms.create');
    }


    public function edit($id)
    {
      $this->domainForm = \App\DomainForm::findorFail($id);
      if (is_null($this->domainForm)) {
        return redirect('forms');
      }
      return view('forms.edit', compact_property($this, 'domainForm'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->domainForm->fill($this->params['domain_form']);
        if ($this->domainForm->save()) {
          return redirect()->back()->with('message', 'form Added!');
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
      $this->form->fill($this->params['domain_form']);
      if ($this->form->save()) {
        return redirect()->back()->with('message', 'Form Updated!');
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
