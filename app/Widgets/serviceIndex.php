<?php

namespace App\Widgets;

use App\Service;
use Arrilot\Widgets\AbstractWidget;

class serviceIndex extends AbstractWidget
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
      return view("widgets.service_index", [ 'services' => Service::filterByDepartment($this->config['department'])->get() ]);
    }
}
