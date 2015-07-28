<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type'];

    # personal accounts
    public function scopePersonal($query)
    {
      return $query->where('type', 'personal');
    }

    # filter by domain
    public function scopeBusiness($query) {
      return $query->where('type', 'business');
    }
    
    public function businessProfile()
    {
      return $this->hasOne('App\BusinessProfile');
    }

    public function userProfile()
    {
      return $this->hasOne('App\BusinessProfile');
    }

    # users
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
