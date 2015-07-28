<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docket extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dockets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];



    public function domains()
    {
        return $this->hasMany('App\Domain');
    }

    # services in this domain
    public function services()
    {
        return $this->hasManyThrough('App\Service', 'App\Department');
    }

    public function setNameAttribute($value)
    {
      $this->attributes['name'] = strtolower($value);
    }
}
