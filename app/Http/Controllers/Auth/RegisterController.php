<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
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

    protected function validator(Request $request)
    {
        return $request->validate([
            'email'      => 'required|unique:users',
            'username'   => 'required|unique:users',
            'password'   => 'confirmed|required'
        ]);
    }

    protected function create(Request $request)
    {
        $brithdate = Carbon::parse($request->birthDate);
        $currentDate = Carbon::now();
        $age = $currentDate->diffInYears($brithdate);
        $request->password = Hash::make($request->password);

        $user = User::create($request->all() + [
            'age'    => $age,
            'active' => 0,
        ]);

        $user->assignRole('student');
        
        return $user;
    }
}
