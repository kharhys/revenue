<?php

namespace App\Widgets;

use App\Domain;
use Arrilot\Widgets\AbstractWidget;

class selectService extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    public function run()
    {
      $domain = Domain::findOrFail(9);
      $values = $domain->services()->get(['services.name', 'services.id']);
      $vals = [];
      if($values) {
        foreach($values as $v) {
          array_push($vals, $v->name);
        }
      }
      $prompt = [0 => 'Service'];
      $services = $prompt + $vals;

      return view("widgets.select_service", [ 'services' => $services ]);
    }
}
