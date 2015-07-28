<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rulemessage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rulemessages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['rule', 'message', 'field_id'];

    # filter rulemessages by parent formfield
    public function scopeFilterByField($query, $field)
    {
      return $query->where('field_id', $field);
    }

    # formfield to which this rulemessage belongs
    public function field()
    {
        return $this->belongsTo('App\Field');
    }

    public function setRuleAttribute($value)
    {
      $this->attributes['rule'] = $this->id.$value;
    }
}
