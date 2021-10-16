<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\MajorPrograms;
use App\Models\Program;
use App\Models\Register;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'userCheck']);;
    }

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
        try {
            $program = Program::create($request->all() + [
                'student_number'                   => 0,
                'student_previous_number_enrolled' => 0,
                'rate'                             => 0
            ]);
            $program->majors()->attach(array_values($request->major_id));
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
        // $majors = $program->majors;
        $majors = Major::all();
        $keys   = $program->majors->modelKeys();

        // $otherMajors = Major::all()->whereNotIn('id', array_values($majors->modelKeys()));

        return view('dashboard.program.edit', compact('program', 'majors', 'keys'));
    }

    public function update(Request $request, Program $program)
    {
        //
        try {

            $program->update($request->all() + [
                'student_number'                   => 0,
                'student_previous_number_enrolled' => 0,
                'rate'                             => 0
            ]);
            $program->majors()->attach(array_values($request->major_id));
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

    public function pendingApprovel()
    {

        $registers = Register::where('active', false)->get();

        $registers->transform(function ($item) {

            $item->studentEmail = User::where('id', $item->student_id)->value('email');
            $item->majorName    = Major::where('id', Section::where('id', $item->section_id)->first()->majorPrograms->major_id)->value('name');
            $item->programName  = Program::where('id', Section::where('id', $item->section_id)->first()->majorPrograms->program_id)->value('name');
            $item->sectionName  = Section::where('id', $item->section_id)->value('name');
            return $item;
        });

        return view('dashboard.program.waitlist', compact('registers'));
    }

    public function pendingApprovelConfirm($id)
    {

        $register = Register::where('id', $id)->first();
        $register->active = true;

        $register->save();
        return redirect()->route('program.pendingResgiter')
            ->withErrors([
                'message' => 'Student Registraion Activated Successfully.',
                'class'   => 'alert-success'
            ]);
    }

    public function pendingApprovelDelete($id)
    {
        $register = Register::where('id', $id)->first();

        $register->delete();

        return redirect()->route('program.pendingResgiter')
            ->withErrors([
                'message' => 'Student Registraion Deleted Successfully.',
                'class'   => 'alert-danger'
            ]);
    }

    public function disableList()
    {

        $registers = Register::where('active', true)->get();

        $registers->transform(function ($item) {

            $item->studentEmail = User::where('id', $item->student_id)->value('email');
            $item->majorName    = Major::where('id', Section::where('id', $item->section_id)->first()->majorPrograms->major_id)->value('name');
            $item->programName  = Program::where('id', Section::where('id', $item->section_id)->first()->majorPrograms->program_id)->value('name');
            $item->sectionName  = Section::where('id', $item->section_id)->value('name');
            return $item;
        });

        return view('dashboard.program.disableList', compact('registers'));
    }

    public function disableRegistration($id)
    {

        $register = Register::where('id', $id)->first();
        $register->active = false;

        $register->save();
        return redirect()->route('program.disableRegister')
            ->withErrors([
                'message' => 'Student Registraion Disabled Successfully.',
                'class'   => 'alert-success'
            ]);
    }
}
