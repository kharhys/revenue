<?php

namespace App\Widgets;

use App\Department;
use Arrilot\Widgets\AbstractWidget;

class departments extends AbstractWidget
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
    public function run(Department $departments)
    {
        //

        return view("widgets.departments", [
            'config' => $this->config,
        ])->with(['departments' => $departments::all()]);
    }
}
