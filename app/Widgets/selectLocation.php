<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class selectLocation extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    public function run()
    {
      $sub = \DB::table('subcounties')->lists('name', 'id');
      $prompt = [0 => 'Subcounty'];
      $subcounties = $prompt + $sub;

      return view("widgets.select_location", [ 'subcounties' => $subcounties ]);
    }
}
