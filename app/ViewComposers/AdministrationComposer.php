<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Department as Department;

class AdministrationComposer
{
    # list of administration departments
    protected $departments;

    # fill list
    public function __construct() {
        $this->departments = Department::all();
    }

    # bind list to view
    public function compose(View $view) {
        $view->with('departments', $this->departments);
    }
}
