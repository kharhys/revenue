<?php

namespace App\Widgets;

use App\Domain;
use Arrilot\Widgets\AbstractWidget;

class sidemenu extends AbstractWidget
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
        return view("widgets.sidemenu", [ 'domains' => Domain::all() ]);
    }
}
