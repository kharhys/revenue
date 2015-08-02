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
      $promptsub = [0 => 'Select Subcounty'];
      $subcounties = array_merge($promptsub, $sub);

      $ward = \DB::table('subcounty_wards')->lists('name', 'id');
      $promptward = [0 => 'Select Ward'];
      $wards = array_merge($promptward, $ward);

      return view("widgets.select_location", [ 'subcounties' => $subcounties, 'wards' => $wards  ]);
    }
}
