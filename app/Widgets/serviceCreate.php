<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class serviceCreate extends AbstractWidget
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
      return view("widgets.service_create", [ 'department' => $this->config['department'] ]);
    }
}
