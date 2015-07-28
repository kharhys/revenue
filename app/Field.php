<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fields';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'ruleset', 'section_id', 'form_id', 'type', 'repository', 'repositorykey'];

    # filter fields by parent section
    public function scopeFilterBySection($query, $section)
    {
      return $query->where('section_id', $section);
    }

    # filter fields by parent section
    public function scopeFilterByForm($query, $form)
    {
      return $query->where('form_id', $form);
    }

    # section to which this form field belongs
    public function service()
    {
        return $this->belongsTo('App\Section');
    }

    # rulemessages of this field
    public function rulemessages()
    {
        return $this->hasMany('App\Rulemessage');
    }

    public function setTypeAttribute($value)
    {
      $this->attributes['type'] = strtolower($value);
    }
}
