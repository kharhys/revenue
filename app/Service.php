<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'synopsis', 'department_id', 'domain_id'];

    # filter by department
    public function scopeFilterByDepartment($query, $department) {
      return $query->where('department_id', $department);
    }

    # department to which this service belongs
    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    # domain to which this service belongs
    public function domaint()
    {
        return $this->belongsTo('App\Domain');
    }

    # form sections for this service
    public function sections()
    {
        return $this->hasMany('App\Section');
    }

    # all form fields belonging to this service
    public function fields()
    {
        return $this->hasManyThrough('App\Field', 'App\Section');
    }
}
