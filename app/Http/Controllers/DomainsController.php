<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DomainsController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
        $this->currentUser = \Auth::user();
    }

    # list domains
    public function index() {
      dd($this->domains);
        //return view('departments.index')->with('departments', $this->departments);
    }

    # show the form for creating domain
    public function create() {
      return view('domains.create');
    }

    #  Show the form for editing the specified resource. Embeds domain object.
    public function edit($id)
    {
      if (is_null($this->domain)) {
        return redirect('domains');
      }
      return view('domains.edit', compact_property($this, 'domain'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->domain->fill($this->params['domain']);
        if ($this->domain->save()) {
          return redirect()->back()->with('message', 'Domain Added!');
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
      $this->domain->fill($this->params['domain']);
      if ($this->domain->save()) {
          return redirect()->back()->with('message', 'Service Domain Updated!');
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
