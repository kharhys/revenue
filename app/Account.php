<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Account extends Model implements StaplerableInterface {

    use EloquentTrait;

    protected $table = 'accounts';

    protected $fillable = ['name', 'type', 'krapin', 'permit', 'certificate'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('krapin');
        $this->hasAttachedFile('permit');
        $this->hasAttachedFile('certificate');

        parent::__construct($attributes);
    }

    # personal accounts
    public function scopePersonal($query) {
      return $query->where('type', 'personal');
    }

    # filter by domain
    public function scopeBusiness($query) {
      return $query->where('type', 'business');
    }

    public function businessProfile()
    {
      return $this->hasOne('App\BusinessProfile');
    }

    public function userProfile()
    {
      return $this->hasOne('App\BusinessProfile');
    }

    # users
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
