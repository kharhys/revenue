<?php

namespace App\Widgets;

use App\Domain;
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
    public function run(Domain $domains)
    {
        //

        return view("widgets.departments", [
            'config' => $this->config,
        ])->with(['domains' => $domains::all()]);
    }
}
