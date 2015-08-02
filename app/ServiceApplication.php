<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceApplication extends Model {

    protected $table = 'ServiceHeader';

    protected $primaryKey = 'ServiceHeaderID';

    protected $fillable = ['FormID', 'ServiceID', 'ServiceStatusID', 'SubmissionDate', 'CustomerID'];

    public $timestamps = false;

    public function id()
    {
        return $this->ServiceHeaderID;
    }

    public function service()
    {
        return $this->belongsTo('App\Service','ServiceID');
    }
}
