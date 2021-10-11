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
        $students =  User::role('teacher')->get();
        return view('dashboard.teacher.index', ['users' => $students]);
    }

    public function assign(User $user) {
        $user = User::find($user->id);

        $majorProgramsIDs = array_values($user->register->values()->pluck('major_programs_id')->toArray());

        $majorPrograms = MajorPrograms::whereNotIn('id',$majorProgramsIDs)->get();

        $majorPrograms->transform(function ($item){
            $item->majorName     = Major::where('id', $item->major_id)->value('name');
            $item->programName   = Program::where('id', $item->program_id)->value('name');
            $item->sectionsNames      = $item->sections;
            return $item;
        });

        return view('dashboard.teacher.assign', compact('user', 'majorPrograms'));
        // dd($majorProgram);

        // $data = User::where('id', $user->id)->with(['register' => function($query) {
        //     $query->select('major_program_id');
        // }])->get();

        // $userSections = $user->register->transform(function ($item){
        //     $item->major_program_id = Program::where('id', $item->majorProgram->program_id)->value('name');
        //     return $item;
        // });

        // $sections->transform(function ($item){
        //     $item->programName = Program::where('id', $item->majorProgram->program_id)->value('name');
        //     $item->majorName   = Major::where('id', $item->majorProgram->major_id)->value('name');
        //     return $item;
        // });


        // $userSectionIds = array_values($user->register->modelKeys());

        // $otherSections = Section::whereNotIn('id',$userSectionIds)->get('major_program_id');

        // dd($otherSections);

        // $otherMajor = MajorPrograms::whereIn('id',$otherSections)->get();

        // dd($otherMajor);
    }

    public function assignClass(Request $request,User $user) {

        try {

            $data = array(
                'currentPayment' => doubleval(0),
                'leftPayment'    => doubleval(0),
                'overallPayment' => doubleval(0)
            );

            $user->register()->attach($request->section_id,$data);
            return redirect()->route('teacher.index')
            ->withErrors([
                'message' => 'Program Assigned successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {
            return $e->getMessage();
            return back()->withErrors([
                'message' => $e->getMessage(),
                'class'   => 'alert-danger'
            ]);
        }
    }
    
    public function editAssign(User $user) {

        $user = User::find($user->id);
        $sectionIDs = $user->register;

        $sectionIDs->transform(function ($item){
            $item->sectionID = $item->pivot->section_id;
            return $item;
        });

        $sectionIDs = array_values($sectionIDs->pluck('sectionID')->toArray());

        $majorProgramIDs = array_values($user->register->values()->pluck('major_programs_id')->toArray());

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
            
            $majorProgramID = Section::where('id',$request->section_id)->value('major_programs_id');

            dd($majorProgramID);

            $registerSections = $user->register;

            $currentData = array();

            foreach ($registerSections as $registerSection) {
                 if ($registerSection->major_programs_id == $majorProgramID){
                    $currentData = array(
                        'currentPayment' => $registerSection->pivot->currentPayment,
                        'leftPayment'    => $registerSection->pivot->leftPayment,
                        'overallPayment' => $registerSection->pivot->overallPayment,
                    );
                    $user->register()->detach($registerSection->pivot->section_id);
                 }
            }

            // $register = Register::where('section_id', $registerId)->first();

            $user->register()->attach($request->section_id, $currentData);
            return redirect()->route('teacher.index')
            ->withErrors([
                'message' => 'Program Assigned successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {
            return $e->getMessage();
            return back()->withErrors([
                'message' => $e->getMessage(),
                'class'   => 'alert-danger'
            ]);
        }
    }
}
