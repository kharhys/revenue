<?php

namespace App\Widgets;

use App\Department;
use Arrilot\Widgets\AbstractWidget;

class selectDepartment extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];


    public function run()
    {
      $depts = Department::filterByDomain(9)->lists('name', 'id')->toArray();
      $prompt = [0 => 'Department'];
      $departments = $prompt + $depts;

      return view("widgets.select_department", [ 'departments' => $departments ]);
    }
}
