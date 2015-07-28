<?php

namespace App\Widgets;

use App\Department;
use Arrilot\Widgets\AbstractWidget;

class departmentIndex extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    { 
        return view("widgets.department_index", [ 'departments' => Department::filterByDomain($this->config['domain'])->get() ]);
    }
}
