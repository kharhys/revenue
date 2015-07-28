<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'inputs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['value', 'field_id', 'application_id'];


    # account with which the user is logged in
    public function field()
    {
        return $this->belongsTo('App\Field');
    }

    # account with which the user is logged in
    public function application()
    {
        return $this->belongsTo('App\Application');
    }
}
