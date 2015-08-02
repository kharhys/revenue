<?php namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    protected $redirectTo = '/dashboard';
    protected $redirectAfterLogout = '/';

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'idnumber' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'code' => 'required',
            'email' => 'required|confirmed|email|max:255|unique:user',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
    * Create a new user instance after a valid registration.
    *
    * @param  array  $data
    * @return User
    */
    public function create(array $data)
    { 
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'idnumber' => $data['idnumber'],
            'mobile' => $data['mobile'],
            'address' => $data['address'],
            'code' => $data['code'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
