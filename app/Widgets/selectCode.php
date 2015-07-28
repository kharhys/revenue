<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class selectCode extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    public function run()
    {
      $code = \DB::table('postal_code')->lists('code', 'id');
      $prompt = [0 => 'Postal Code'];
      $codes = $prompt + $code;

      return view("widgets.select_code", [ 'codes' => $codes ]);
    }
}
