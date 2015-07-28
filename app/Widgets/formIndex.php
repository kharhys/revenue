<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class formIndex extends AbstractWidget
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

        return view("widgets.form_index", [
            'forms' => \App\DomainForm::all(),
        ]);
    }
}
