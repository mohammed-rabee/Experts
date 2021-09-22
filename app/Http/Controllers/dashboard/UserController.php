<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $users = User::with('roles')->get();
        dd($users);
        return view('dashboard.user.index', ['users' => $users]);
    }

    public function create()
    {
        //
        $roles = Role::all();
        return view('dashboard.user.create', compact('roles'));

    }

    public function store(Request $request)
    {
        try {

            $brithdate = Carbon::parse($request->birthDate);
            $currentDate = Carbon::now();
            $age = $currentDate->diffInYears($brithdate);

            $user = User::create($request->all() + [
                'age' => $age
            ]);
            $user->assignRole('super-admin');

            return redirect()->route('user.index')
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

    public function edit(User $teacher)
    {
        //
        // $majors = $program->majors;
        // $majors = Major::all();
        // $keys   = $program->majors->modelKeys();

        // $otherMajors = Major::all()->whereNotIn('id', array_values($majors->modelKeys()));
        
        return view('dashboard.program.edit', compact('program', 'majors', 'keys'));
    }

    public function update(Request $request, User $user)
    {
        //
        try {

            $user->update($request->all());

            // $program->majors()->attach(array_values($request->major_id));
            return redirect()->route('teacher.index')
            ->withErrors([
                'message' => 'Teacher created successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => $e->getMessage(),
                'class'   => 'alert-danger'
            ]);
        }
    }

    public function destroy(Program $program)
    {
        //
        try {

            $program->delete();
            return redirect()->route('teacher.index')
            ->withErrors([
                'message' => 'Teacher Deleted successfully.',
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
