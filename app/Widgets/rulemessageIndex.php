<?php

namespace App\Widgets;

use App\Rulemessage;
use Arrilot\Widgets\AbstractWidget;

class rulemessageIndex extends AbstractWidget
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
      return view("widgets.rulemessage_index", [ 'rulemessages' => Rulemessage::filterByField($this->config['field'])->get() ]);
    }
}
