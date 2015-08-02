<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Plot extends Model implements StaplerableInterface {

    use EloquentTrait;

    protected $table = 'plots';

    protected $fillable = ['plotnumber', 'area', 'account_id', 'idnumber', 'krapin', 'passportphoto', 'officialsearch', 'titledeed', 'ward_id'];

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('krapin');
        $this->hasAttachedFile('titledeed');
        $this->hasAttachedFile('passportphoto');

        parent::__construct($attributes);
    }

    # owning account
    public function account() {
        return $this->belongsToMany('App\Account');
    }
    # owning account
    public function owner()  {
        return $this->account;
    }
}
