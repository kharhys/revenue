<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'service_fees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['service_id', 'municipality', 'subcounty'];

    # domain to which this department belongs
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
