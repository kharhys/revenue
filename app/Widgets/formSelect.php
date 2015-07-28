<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class formSelect extends AbstractWidget
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
        return view("widgets.form_select", [
            'forms' => \App\DomainForm::lists('name', 'id')->toArray()
        ]);
    }
}
