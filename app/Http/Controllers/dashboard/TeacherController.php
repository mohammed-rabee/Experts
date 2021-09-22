<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TeacherController extends Controller
{
    //
    public function index()
    {
        //
        $teachers =  User::role('teacher')->get();
        return view('dashboard.teacher.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        //
        $roles = Role::all();
        return view('dashboard.teacher.create', compact('roles'));

    }

    public function store(Request $request)
    {
        try {
            $teacher = User::create($request->all());
            // $program->majors()->attach(array_values($request->major_id));
            return redirect()->route('program.index')
            ->withErrors([
                'message' => 'Teacher created successfully.',
                'class'   => 'alert-success'
            ]);
        } catch (Exception $e) {
            return back()->withErrors([
                'message' => 'Teacher name already registered',
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
                'message' => 'You need to choose another name , Teacher name already been taken',
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
                'message' => 'You need to choose another name , Teacher name already been taken',
                'class'   => 'alert-danger'
            ]);

        }
    }
}
