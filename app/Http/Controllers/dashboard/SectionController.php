<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MajorPrograms;
use App\Models\Program;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //
    public function index()
    {
        //
        $sections = Section::all();
        return view('dashboard.section.index', ['sections' => $sections]);
    }

    public function create()
    {
        //
        $programs = Program::with('majors')->get();

        // $programView = [
        //     'id' => 0,
        //     'Program Name' => 0,
        //     'Major Name' => 0,
        // ];
        // $test = array();

        // foreach ($programs as $program) {
        //     $test[] = $program->majors;
        // }

        // dd($test);
        
        // dd($programs->majors->all());
        return view('dashboard.section.create', [ 'programs' => $programs]);

    }

    public function store(Request $request)
    {
        //
        // dd($request->all());
        try {
            Section::create($request->all());
            return redirect()->route('section.index')
            ->withErrors([
                'message' => 'Section created successfully.',
                'class'   => 'alert-success'
            ]);
        } catch (Exception $e) {
            return back()->withErrors([
                'message' => 'Section name already registered',
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
