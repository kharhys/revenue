<?php

namespace App\Widgets;

use App\Field;
use Arrilot\Widgets\AbstractWidget;

class fieldList extends AbstractWidget
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
        return view("widgets.field_list", [ 'fields' => Field::filterByForm($this->config['form']->id)->get() ]);
    }
}
