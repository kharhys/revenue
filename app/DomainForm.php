<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomainForm extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'domain_forms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'domain_id'];

    # domain
    public function domain()
    {
        return $this->belongsTo('App\Domain');
    }

    # sections of this form
    public function sections()
    {
        return $this->hasMany('App\Section', 'form_id');
    }
}
