<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\MajorPrograms;
use App\Models\Program;
use App\Models\Register;
use App\Models\Section;
use App\Models\Session;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class CourseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function courseList() {
        
        $majors = Major::all();
        return view('site.program.index', compact('majors'));
    }

    public function recommendedCourses() {
        
        $major_id = Auth::user()->major_id;
        $major = Major::find($major_id);
        // $programs = MajorPrograms::where('major_id', $major_id)->get();

        // $programs = Program::whereHas('majors', function($q) use ($major_id) {
        //     $q->where('major_id', $major_id)->pluck('major_programs_id');
        // })->get();

        $programs = MajorPrograms::where('major_id', $major_id)->paginate(5);

        $programs->transform(function($item) {
            
            $item->program = Program::where('id', $item->program_id)->first();
            return $item;
        });

        return view('site.program.recommended', compact('major', 'programs'));
    }

    public function myCourses() {

        $major_id = Auth::user()->major_id;
        $major = Major::find($major_id);
        
        $courses = Auth::user()->register->modelKeys();

        $programs = MajorPrograms::whereHas('sections', function($q) use ($courses) {
            $q->whereIn('id', $courses)->whereHas('students', function($q2){
                $q2->where('registers.active', true);
            });
        })->paginate(5);

        $programs->transform(function ($item){
            $item->program = Program::where('id', $item->program_id)->first();
            $item->major   = Major::where('id', $item->major_id)->first();
            return $item;
        });

        return view('site.program.mycourse', compact('major', 'programs'));
    }

    public function details($id) {

        $section = null;
        $register = null;
        $registred = false;
        $registerButNotActive = false;
        
        
        $major_id = Auth::user()->major_id;

        $majorProgram = MajorPrograms::where('id', $id)->first();

        $program = Program::find($majorProgram->program_id);

        $section = array_values($majorProgram->sections->modelKeys());

        $userSections = array_values(Auth::user()->register->modelKeys());

        foreach ($userSections as $userSection) {
            if (in_array($userSection, $section)) {
                $registred = true;
                $register = Register::where('section_id', $userSection)->where('student_id', Auth::user()->id)->where('active', true)->first();
                if($register == null)
                $registerButNotActive = true;
                
                if($register != null)
                $section = $register->sections;

                break;
            }  
        }
        

        return view('site.program.details', compact('program', 'register', 'section', 'registred', 'registerButNotActive'));
    }

    public function register($id) {

        try {

            $majorProgram = MajorPrograms::where('program_id', $id)->where('major_id', Auth::user()->major_id)->first();
            $sectionFree = $majorProgram->sections;

            $data = array(
                'currentPayment' => doubleval(0),
                'leftPayment'    => doubleval(0),
                'overallPayment' => doubleval(0),
                'active'         => false,
            );

            if($sectionFree->isEmpty()) {

                $section = Section::create([
                    'major_programs_id'      => $majorProgram->id,
                    'currentNumberOfStudent' => 0,
                    'name'                   => 'createdSection',
                    'maxNumberOfStudent'     => 60,
                ]);
                $user = User::find(Auth::user()->id);
                $test = $user->register()->attach($section->id, $data);

                return redirect()->route('course.detail', $id)
                ->withErrors([
                    'message' => 'Registred successfully.',
                    'class'   => 'alert-success'
                ]);
                
            } else {
                // Section::where('major_programs_id',1)->whereRaw('currentNumberOfStudent < maxNumberOfStudent')->get()
                $section = $majorProgram->sections()->whereRaw('currentNumberOfStudent < maxNumberOfStudent')->first();
                $user = User::find(Auth::user()->id);
                $user->register()->attach($section->id, $data);
                
                return redirect()->route('course.detail', $id)
                ->withErrors([
                    'message' => 'Registred successfully.',
                    'class'   => 'alert-success'
                ]);
            }

        } catch (Exception $e) {
            return back()->withErrors([
                'message' => $e->getMessage(),
                'class'   => 'alert-danger'
            ]);
        }
     
    }
}
