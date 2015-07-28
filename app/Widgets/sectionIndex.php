<?php

namespace App\Widgets;

use App\Section;
use Arrilot\Widgets\AbstractWidget;

class sectionIndex extends AbstractWidget
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
      return view("widgets.section_index", [ 'sections' => Section::filterByForm($this->config['form_id'])->get() ]);
    }
}
