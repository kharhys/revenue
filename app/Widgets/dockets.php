<?php

namespace App\Widgets;

use App\Docket;
use Arrilot\Widgets\AbstractWidget;

class dockets extends AbstractWidget
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
        //

        return view("widgets.dockets", [
            'dockets' => Docket::all(),
        ]);
    }
}
