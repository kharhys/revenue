<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'business_profile';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['service_id', 'department_id','account_id', 'phone', 'email', 'website', 'address', 'code', 'subcounty', 'ward', 'zone'];


    public function account()
    {
        return $this->belongsTo('App\Account');
    }

}
