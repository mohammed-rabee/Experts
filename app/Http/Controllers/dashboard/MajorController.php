<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        //
        $majors = Major::all();
        return view('dashboard.major.index', ['majors' => $majors]);
    }

    public function create()
    {
        //
        $departments = Department::all();
        return view('dashboard.major.create', [ 'departments' => $departments]);

    }

    public function store(Request $request)
    {
        //
        // dd($request->all());
        try {
            Major::create($request->all());
            return redirect()->route('major.index')
            ->withErrors([
                'message' => 'Major created successfully.',
                'class'   => 'alert-success'
            ]);
        } catch (Exception $e) {
            return back()->withErrors([
                'message' => 'Major name already registered',
                'class'   => 'alert-danger'
            ]);
        }   
    }

    public function edit(Major $major)
    {
        //
        // $departments = $major->department;
        // $otherDepartments = Department::all()->whereNotIn('id', $departments->id);

        $departments = Department::all();
        $keys   = array($major->department->id);
        
        return view('dashboard.major.edit', compact('major', 'departments', 'keys'));
    }

    public function update(Request $request, Major $major)
    {
        //
        try {

            $major->update($request->all());
            return redirect()->route('major.index')
            ->withErrors([
                'message' => 'Major created successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => 'You need to choose another name , Major name already been taken',
                'class'   => 'alert-danger'
            ]);
        }
    }

    public function destroy(Major $major)
    {
        //
        try {

            $major->delete();
            return redirect()->route('major.index')
            ->withErrors([
                'message' => 'Major Deleted successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => 'You need to choose another name , Major name already been taken',
                'class'   => 'alert-danger'
            ]);

        }
    }
}
