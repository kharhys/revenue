<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Department as Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller {

    public function __construct() {
        $this->loadAndAuthorizeResource();
    }

    # list services
    public function index(Request $request) {
      if( $request->get('department') ) {
        $services = \App\Service::filterByDepartment($request->get('department'))->get();
        $departments = $services->toArray() ? $services[0]->department->domain->departments()->get() : [];
      } elseif( $request->get('domain') ) {
        $domain = \App\Domain::findOrfail($request->get('domain'));
        $services = $domain->services()->get();
        $departments = $domain->departments()->get();
      } else {
        $services = $this->services;
        $departments = \App\Department::all();
      } 
      return view('services.index', ['services' => $services, 'departments' => $departments ]);
    }

    # show the form for creating service
    public function create() {
      dd($this);
      return view('services.create');
    }

    #  Show the form for editing the specified resource. Embeds service object.
    public function edit($id)
    {
      if (is_null($this->service)) {
        return redirect('services');
      }
      return view('services.edit', compact_property($this, 'service'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $this->service->fill($this->params['service']);
        if ($this->service->save()) {
          return redirect()->back()->with('message', 'Service Added!');
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
        return view('services.show', ['service' => $this->service ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
      $this->service->fill($this->params['service']);
      if ($this->service->save()) {
        return redirect()->back()->with('message', 'Service Added!');
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
