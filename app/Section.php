<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'form_id'];

    # service to which this form section belongs
    public function form()
    {
        return $this->belongsTo('App\DomainForm');
    }

    # form fields belonging to this section
    public function fields()
    {
        return $this->hasMany('App\Field');
    }

    # filter sections by parent service
    public function scopeFilterByForm($query, $form)
    {
      return $query->where('form_id', $form);
    }
}
