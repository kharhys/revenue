<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'plots';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['plotnumber'];


    # owning account
    public function account()
    {
        return $this->belongsToMany('App\Account');
    }
    # owning account
    public function owner()
    {
        return $this->account;
    }
}
