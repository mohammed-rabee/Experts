<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\MajorPrograms;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TeacherController extends Controller
{
    //
    public function index()
    {
        //
        $students =  User::role('teacher')->get();
        return view('dashboard.teacher.index', ['users' => $students]);
    }

    public function assign(User $user) {
        
        $user = User::find($user->id);

        $majorProgramsIDs = array_values($user->teach->values()->pluck('major_programs_id')->toArray());

        $majorPrograms = MajorPrograms::whereNotIn('id',$majorProgramsIDs)->get();

        $majorPrograms->transform(function ($item){
            $item->majorName     = Major::where('id', $item->major_id)->value('name');
            $item->programName   = Program::where('id', $item->program_id)->value('name');
            $item->sectionsNames      = $item->sections;
            return $item;
        });

        return view('dashboard.teacher.assign', compact('user', 'majorPrograms'));

    }

    public function assignClass(Request $request,User $user) {

        try {
            $user->teach()->attach(array_values($request->section_id));
            return redirect()->route('teacher.index')
            ->withErrors([
                'message' => 'Program Assigned successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {
            return back()->withErrors([
                'message' => $e->getMessage(),
                'class'   => 'alert-danger'
            ]);
        }
    }
    
    public function editAssign(User $user) {

        $user = User::find($user->id);

        $sectionIDs = $user->teach;

        $sectionIDs->transform(function ($item){
            $item->sectionID = $item->pivot->section_id;
            return $item;
        });

        $sectionIDs = array_values($sectionIDs->pluck('sectionID')->toArray());

        $majorProgramIDs = array_values($user->teach->values()->pluck('major_programs_id')->toArray());

        $majorPrograms = MajorPrograms::whereIn('id',$majorProgramIDs)->get();

        $majorPrograms->transform(function ($item){
            $item->majorName     = Major::where('id', $item->major_id)->value('name');
            $item->programName   = Program::where('id', $item->program_id)->value('name');
            $item->sectionsNames      = $item->sections;
            return $item;
        });

        return view('dashboard.teacher.editAssign', compact('user', 'majorPrograms', 'sectionIDs'));

    }

    public function editAssignClass(Request $request, User $user) {


        try {
            
            $user->register()->sync($request->section_id);
            return redirect()->route('teacher.index')
            ->withErrors([
                'message' => 'Program Assigned successfully.',
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
