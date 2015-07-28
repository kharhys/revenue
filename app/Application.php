<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'applications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['service', 'applicant', 'user_id', 'account_id', 'service_id'];

    # user making this application
    public function agent()
    {
        return $this->belongsTo('App\User');
    }

    # account with which the user is logged in
    public function applicant()
    {
        return $this->belongsTo('App\Account');
    }

    # domain to which this department belongs
    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
