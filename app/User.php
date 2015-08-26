<?php namespace App;


use App\Team;
use Mpociot\Teamwork\Traits\UserHasTeams;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword, UserHasTeams;

    public static function boot()  {
        static::created(function($user) {
          if(User::count() == 1) {
              $systemTeam   = new Team();
              $systemTeam->name = 'System Administrators';
              $systemTeam->save();
              $user->attachTeam($systemTeam);

              $workflowTeam   = new Team();
              $workflowTeam->name = 'Workflow Administrators';
              $workflowTeam->save();
              $user->attachTeam($workflowTeam);
          }
        });
    }

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'idnumber','mobile', 'address', 'code', 'jobgroup'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function permissions()
    {
        return $this->hasMany('App\Authority\Permission');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Authority\Role');
    }

    public function hasRole($key)  {
        $hasRole = false;
        foreach ($this->roles as $role) {
            if ($role->name === $key) {
                $hasRole = true;
                break;
            }
        }

        return $hasRole;
    }

    public function isMemberOf($key) {
        $isMemberOf = false;
        foreach ($this->teams as $team) {
            if ($team->name === $key) {
                $isMemberOf = true;
                break;
            }
        }

        return $isMemberOf;
    }

    public function isCountyEmployee() {
        $isCountyEmployee = false;
        if ($this->teams()->count() > 0) {
          $isCountyEmployee = true;
        }

        return $isCountyEmployee;
    }

    # accounts
    public function accounts()
    {
        return $this->belongsToMany('App\Account');
    }

    # business accounts
    public function businessAccounts()
    {
        return $this->accounts()->business();
    }

    # personal account: immutable
    public function personalAccount()
    {
        return $this->belongsTo('App\Account');
    }

    # current account: mutable
    public function agentAccount()
    {
        return $this->belongsTo('App\Account');
    }



}
