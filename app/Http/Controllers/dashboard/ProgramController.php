<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    public function index()
    {
        //
        $programs = Program::all();
        return view('dashboard.program.index', ['programs' => $programs]);
    }

    public function create()
    {
        //
        $majors = Major::all();
        return view('dashboard.program.create', ['majors' => $majors]);

    }

    public function store(Request $request)
    {
        //
        try {
            Program::create($request->all());
            return redirect()->route('program.index')
            ->withErrors([
                'message' => 'Program created successfully.',
                'class'   => 'alert-success'
            ]);
        } catch (Exception $e) {
            return back()->withErrors([
                'message' => 'Program name already registered',
                'class'   => 'alert-danger'
            ]);
        }   
    }

    public function edit(Program $program)
    {
        //
        return view('dashboard.program.edit', compact('program'));
    }

    public function update(Request $request, Program $program)
    {
        //
        try {

            $program->update($request->all());
            return redirect()->route('program.index')
            ->withErrors([
                'message' => 'Program created successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => 'You need to choose another name , Program name already been taken',
                'class'   => 'alert-danger'
            ]);
        }
    }

    public function destroy(Program $program)
    {
        //
        try {

            $program->delete();
            return redirect()->route('program.index')
            ->withErrors([
                'message' => 'Program Deleted successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => 'You need to choose another name , Program name already been taken',
                'class'   => 'alert-danger'
            ]);

        }
    }
}
