<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'userCheck']);
    }
    
    //
    public function index()
    {
        //
        $users = User::with('roles')->get();
        // dd($users);
        return view('dashboard.user.create', ['users' => $users]);
    }

    public function create()
    {
        //
        $roles = Role::all();
        return view('dashboard.user.create', compact('roles'));

    }

    public function store(Request $request)
    {
        // dd($request->role);
        try {

            $brithdate = Carbon::parse($request->birthDate);
            $currentDate = Carbon::now();
            $age = $currentDate->diffInYears($brithdate);

            $pass = Hash::make($request->password);
            $request->password = $pass;

                // dd($pass);

            $user = User::create($request->all() + [
                'age'      => $age,
                'active'   => true
            ]);

            $user->password = $pass;
            
            $user->assignRole($request->role);

            $user->save();

            return redirect()->route('user.create')
            ->withErrors([
                'message' => 'User created successfully.',
                'class'   => 'alert-success'
            ]);
        } catch (Exception $e) {
            return back()->withErrors([
                'message' => $e->getMessage(),
                'class'   => 'alert-danger'
            ]);
        }   
    }

    public function edit(User $user)
    {
        $userRoles = $user->roles->modelKeys();
        $allRoles = Role::all();
        return view('dashboard.user.edit', compact('user', 'userRoles', 'allRoles'));
    }

    public function update(Request $request, User $user)
    {
        //
        try {

            $user->update($request->all());
            $user->assignRole($request->role);

            // $program->majors()->attach(array_values($request->major_id));
            return redirect()->route('user.create')
            ->withErrors([
                'message' => 'User updated successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => $e->getMessage(),
                'class'   => 'alert-danger'
            ]);
        }
    }

    public function destroy(User $user)
    {
        //
        try {

            $user->delete();
            return redirect()->route('user.create')
            ->withErrors([
                'message' => 'User Deleted successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => $e->getMessage(),
                'class'   => 'alert-danger'
            ]);

        }
    }
}
