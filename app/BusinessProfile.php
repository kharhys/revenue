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
    protected $table = 'profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['service_id', 'account_id', 'phone', 'email', 'website', 'address', 'code', 'ward_id'];


    public function account()
    {
        return $this->belongsTo('App\Account');
    }

}
