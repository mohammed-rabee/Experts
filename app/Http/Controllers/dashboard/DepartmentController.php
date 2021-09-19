<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index()
    {
        //
        $departments = Department::all();
        return view('dashboard.department.index', ['departments' => $departments]);
    }

    public function create()
    {
        //
        $colleges = College::all();
        return view('dashboard.department.create', [ 'colleges' => $colleges]);

    }

    public function store(Request $request)
    {
        //
        try {
            Department::create($request->all());
            return redirect()->route('department.index')
            ->withErrors([
                'message' => 'Department created successfully.',
                'class'   => 'alert-success'
            ]);
        } catch (Exception $e) {
            return back()->withErrors([
                'message' => 'Department name already registered',
                'class'   => 'alert-danger'
            ]);
        }   
    }

    public function edit(Department $department)
    {
        //
        $colleges = $department->college;
        $otherColleges = College::all()->whereNotIn('id', $colleges->id);
        return view('dashboard.department.edit', compact('department', 'otherColleges'));
    }

    public function update(Request $request, Department $department)
    {
        //
        try {

            $department->update($request->all());
            return redirect()->route('department.index')
            ->withErrors([
                'message' => 'Department created successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => 'You need to choose another name , department name already been taken',
                'class'   => 'alert-danger'
            ]);
        }
    }

    public function destroy(Department $department)
    {
        //
        try {

            $department->delete();
            return redirect()->route('department.index')
            ->withErrors([
                'message' => 'Department Deleted successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => 'You need to choose another name , department name already been taken',
                'class'   => 'alert-danger'
            ]);

        }
    }
}
