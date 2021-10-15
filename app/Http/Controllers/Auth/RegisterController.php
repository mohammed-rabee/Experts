<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Faker\Provider\cs_CZ\PhoneNumber;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

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
        // $this->middleware('guest:admin');
        // $this->middleware('guest:teacher');
        // $this->middleware('guest:student');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        try {

            $brithdate = Carbon::parse($data['birthDate']);
            $currentDate = Carbon::now();
            $age = $currentDate->diffInYears($brithdate);

            $user = User::create([
                'fname'     => $data['fname'],
                'lname'     => $data['lname'],
                'username'  => $data['username'],
                'password'  => Hash::make($data['password']),
                'email'     => $data['email'],
                'birthDate' => $data['birthDate'],
                'age'       => $age,
                'phone'     => $data['phone'],
                'gander'    => $data['gander'],
                'major_id'  => $data['major_id'],
                'active'    => false,
            ]);

            $user->assignRole('student');

            return $user;
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }
}
