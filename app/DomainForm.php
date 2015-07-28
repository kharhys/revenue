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
    protected $table = 'forms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    # sections of this form
    public function sections()
    {
        return $this->hasMany('App\Section', 'form_id');
    }
}
