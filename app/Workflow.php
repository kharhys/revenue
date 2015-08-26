<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model {
    protected $table = 'workflows';

    protected $fillable = ['name', 'supervisors_team_id', 'inspectors_team_id', 'dispensers_team_id' ];

    # workflow supervisors
    public function supervisors()  {
        return $this->belongsTo('App\Team');
    }
    # applications inspectors
    public function inspectors()  {
        return $this->belongsTo('App\Team');
    }
    # serive dispensers
    public function dispensers()  {
        return $this->belongsTo('App\Team');
    }
}
