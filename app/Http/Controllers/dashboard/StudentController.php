<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\MajorPrograms;
use App\Models\Program;
use App\Models\Register;
use App\Models\Section;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'userCheck']);;
    }
    
    //
    public function index()
    {
        //
        $students =  User::role('student')->where('active', true)->paginate(5);
        return view('dashboard.student.index', ['users' => $students]);
    }

    public function pendingApprovel()
    {
        //
        $students =  User::role('student')->where('active', false)->paginate(5);
        return view('dashboard.student.waitlist', ['users' => $students]);
    }

    public function activate(User $user)
    {

        $user->active = true;
        $user->update($user->toArray());

        return back()->withErrors([
            'message' => 'User Account Activated Successfully.',
            'class'   => 'alert-success'
        ]);
    }

    public function disable(User $user)
    {

        $user->active = false;
        $user->update($user->toArray());

        return back()->withErrors([
            'message' => 'User Account Disabled Successfully.',
            'class'   => 'alert-success'
        ]);
    }

    public function assign(User $user)
    {
        $user = User::find($user->id);

        $majorProgramsIDs = array_values($user->register->values()->pluck('major_programs_id')->toArray());

        $majorPrograms = MajorPrograms::whereNotIn('id', $majorProgramsIDs)->get();

        $majorPrograms->transform(function ($item) {
            $item->majorName          = Major::where('id', $item->major_id)->value('name');
            $item->programName        = Program::where('id', $item->program_id)->value('name');
            $item->sectionsNames      = $item->sections;
            return $item;
        });

        return view('dashboard.student.assign', compact('user', 'majorPrograms'));


    }

    public function assignClass(Request $request, User $user)
    {

        try {

            $data = array(
                'currentPayment' => doubleval(0),
                'leftPayment'    => doubleval(0),
                'overallPayment' => doubleval(0),
                'active'         => true,
            );

            $user->register()->attach(array_values($request->section_id), $data);
            return redirect()->route('student.index')
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

    public function editAssign(User $user)
    {

        $user = User::find($user->id);
        $sectionIDs = $user->register;

        $sectionIDs->transform(function ($item) {
            $item->sectionID = $item->pivot->section_id;
            return $item;
        });

        $sectionIDs = array_values($sectionIDs->pluck('sectionID')->toArray());

        $majorProgramIDs = array_values($user->register->values()->pluck('major_programs_id')->toArray());

        $majorPrograms = MajorPrograms::whereIn('id', $majorProgramIDs)->get();

        $majorPrograms->transform(function ($item) {
            $item->majorName          = Major::where('id', $item->major_id)->value('name');
            $item->programName        = Program::where('id', $item->program_id)->value('name');
            $item->sectionsNames      = $item->sections;
            return $item;
        });

        return view('dashboard.student.editAssign', compact('user', 'majorPrograms', 'sectionIDs'));
    }

    public function editAssignClass(Request $request, User $user)
    {


        try {
            
            if ($request->section_id == null) {
                return redirect()->route('student.index')
                ->withErrors([
                    'message' => 'You did not select anything.',
                    'class'   => 'alert-danger'
                ]);
            }

            $majorProgramID = Section::select('major_programs_id')->whereIn('id', array_values($request->section_id))->get('major_programs_id');

            $registerSections = $user->register;

            $currentData = array();

            // 'id'             => array_values(Register::where('section_id', $registerSection->id)->where('student_id', $user->id)->pluck('id')->toArray()),

            foreach ($registerSections as $registerSection) {
                if (in_array($registerSection->major_programs_id, array_values(Arr::flatten($majorProgramID->toArray())))) {

                    $sectoinId = array_values(Section::whereIn('id', $request->section_id)->where('major_programs_id', $registerSection->major_programs_id)->pluck('id')->toArray());

                    $currentData = array(
                        
                        'currentPayment' => $registerSection->pivot->currentPayment,
                        'leftPayment'    => $registerSection->pivot->leftPayment,
                        'overallPayment' => $registerSection->pivot->overallPayment,
                        'active'         => ($registerSection->pivot->active) ? true : false
                    );

                    $user->register()->detach($registerSection->pivot->section_id);
                    $user->register()->attach($sectoinId, $currentData);
                }
            }

            return redirect()->route('student.index')
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
