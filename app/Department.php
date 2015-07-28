<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'departments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'domain_id'];

    # domain to which this department belongs
    public function domain()
    {
        return $this->belongsTo('App\Domain');
    }

    # filter by domain
    public function scopeFilterByDomain($query, $domain) {
      return $query->where('domain_id', $domain);
    }

    # services in this department
    public function services()
    {
        return $this->hasMany('App\Service');
    }
}
