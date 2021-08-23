<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Faker\Provider\cs_CZ\PhoneNumber;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function PHPSTORM_META\type;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname'        => ['required', 'string', 'max:255'],
            'lname'        => ['required', 'string', 'max:255'],
            'email'        => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'     => ['required', 'string', 'min:8', 'confirmed'],
            'phone'        => ['required', 'numeric'],
            'gender'       => ['required', 'string'],
            'day'          => ['required', 'numeric'],
            'month'        => ['required', 'numeric'],
            'year'         => ['required', 'numeric'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // $day    = $data['day'];
        // $month  = $data['month'];
        // $year   = $data['year'];
        // $birth_date = $year + '-' + $month + '-' + $day;
        $student = Student::create();

        // $student = Teacher::find($student->id);

        // $user = new User;

        // $user->fname    = $data['fname'];
        // $user->lname    = $data['lname'];

        // $user->username      = $data['email'];
        // $user->password      = Hash::make($data['password']);

        // $user->email        = $data['email'];
        // $user->phone         = $data['phone'];
        // $user->gander        = $data['gender'];

        // dd($user);

        // return $student->user()->save($user);

        // remember that user should select his major 
        // and colleage department so the rigster login can be compplete
        return $student->user()->create([
            'fname'         => $data['fname'],
            'lanme'         => $data['lname'],

            'username'      => $data['email'],
            'password'      => Hash::make($data['password']),

            'email'         => $data['email'],
            'phone'         => $data['phone'],
            'gander'        => $data['gender']

        ]);
    }
}
