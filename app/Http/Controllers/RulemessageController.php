<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RulemessageController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list rulemessages
    public function index() {
      dd($this->rulemessages);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating rulemessage
    public function create() {
      return view('rulemessages.create');
    }

    #  Show the form for editing the specified resource. Embeds rulemessage object.
    public function edit($id)
    {
      if (is_null($this->rulemessage)) {
        return redirect('rulemessages');
      }
      return view('rulemessages.edit', compact_property($this, 'rulemessage'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->rulemessage->fill($this->params['rulemessage']);
        if ($this->rulemessage->save()) {
          return redirect()->back()->with('message', 'rulemessage Added!');
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
      $this->rulemessage->fill($this->params['rulemessage']);
      if ($this->rulemessage->save()) {
        return redirect()->back()->with('message', 'rulemessage Added!');
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
