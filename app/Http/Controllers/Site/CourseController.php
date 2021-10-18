<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\MajorPrograms;
use App\Models\Program;
use App\Models\Register;
use App\Models\Resource;
use App\Models\Section;
use App\Models\Session;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use function PHPUnit\Framework\isEmpty;

class CourseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function courseList()
    {

        $majors = Major::all();
        return view('site.program.index', compact('majors'));
    }

    public function recommendedCourses()
    {

        $major_id = Auth::user()->major_id;
        $major = Major::find($major_id);
        // $programs = MajorPrograms::where('major_id', $major_id)->get();

        // $programs = Program::whereHas('majors', function($q) use ($major_id) {
        //     $q->where('major_id', $major_id)->pluck('major_programs_id');
        // })->get();

        $programs = MajorPrograms::where('major_id', $major_id)->paginate(5);

        $programs->transform(function ($item) {

            $item->program = Program::where('id', $item->program_id)->first();
            return $item;
        });

        return view('site.program.recommended', compact('major', 'programs'));
    }

    public function myCourses()
    {

        $user = User::find(Auth::user()->id);

        if ($user->hasRole('teacher')) {

            $courses = Auth::user()->teach->modelKeys();

            $programs = MajorPrograms::whereHas('sections', function ($q) use ($courses) {
                $q->whereIn('id', $courses);
            })->paginate(5);

            // $programs = MajorPrograms::whereHas('sections', function ($q) use ($courses) {
            //     $q->whereIn('id', $courses);
            // })->get();

            $programs->transform(function ($item) {
                $item->program  = Program::where('id', $item->program_id)->first();
                $item->major    = Major::where('id', $item->major_id)->first();
                return $item;
            });

            return view('site.program.mycourse', compact('programs'));

        } else {

            $major_id = Auth::user()->major_id;

            $courses = Auth::user()->register->modelKeys();

            $programs = MajorPrograms::whereHas('sections', function ($q) use ($courses) {
                $q->whereIn('id', $courses)->whereHas('students', function ($q2) {
                    $q2->where('registers.active', true);
                });
            })->paginate(5);

            $programs->transform(function ($item) {
                $item->program = Program::where('id', $item->program_id)->first();
                $item->major   = Major::where('id', $item->major_id)->first();
                return $item;
            });

            return view('site.program.mycourse', compact('programs'));
        }
    }

    public function details($id)
    {

        $user = User::find(Auth::user()->id);

        if ($user->hasRole('teacher')) {

            $section = null;
            $register = null;
            $teacher = true;

            $major_id = Auth::user()->major_id;

            $majorProgram = MajorPrograms::where('id', $id)->first();

            $program = Program::find($majorProgram->program_id);

            // $section = array_values($majorProgram->sections->modelKeys());
            // $sections = $majorProgram->sections->whereIn('id', $userSections);

            $userSections = array_values(Auth::user()->teach->modelKeys());
            
            $sections = Section::whereIn('id', $userSections)->where('major_programs_id',$id)->paginate(1);
            // $sections = Section::whereIn('id', $userSections)->where('major_programs_id',$id)->get();
            // dd($sections[0]->sessions);

            return view('site.program.details', compact('program', 'teacher', 'sections'));

        } else {
            $section = null;
            $register = null;
            $teacher = false;
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
                    if ($register == null)
                        $registerButNotActive = true;

                    if ($register != null)
                        $section = $register->sections;

                    break;
                }
            }


            return view('site.program.details', compact('program', 'register', 'section', 'registred', 'registerButNotActive'));
        }
    }

    public function register($id)
    {

        try {

            $majorProgram = MajorPrograms::where('program_id', $id)->where('major_id', Auth::user()->major_id)->first();
            $sectionFree = $majorProgram->sections;

            $data = array(
                'currentPayment' => doubleval(0),
                'leftPayment'    => doubleval(0),
                'overallPayment' => doubleval(0),
                'active'         => false,
            );

            if ($sectionFree->isEmpty()) {

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

    public function sessionStore(Request $request, $id) {

        $section = Section::where('id', $id)->first();

        $session             = new Session;
        $session->name       = $request->name;
        $session->url        = $request->url;
        $session->time       = Carbon::parse($request->time);
        $session->annoncment = $request->annoncment;

        $session = $section->sessions()->save($session);

        return redirect()->route('course.detail', $section->major_programs_id);
    }

    public function sessionModify(Request $request, $id) {

        $teacher = true;

        $session = Session::where('id', $id)->first();

        $section = Section::where('id', $session->section_id)->first();

        $session->update($request->all());

        return redirect()->route('course.detail', $section->major_programs_id);
    }

    public function sessionDelete($id) {

        $teacher = true;

        $session = Session::where('id', $id)->first();

        $section = Section::where('id', $session->section_id)->first();

        $session->delete();

        return redirect()->route('course.detail', $section->major_programs_id);
    }

    public function sectionAddDoc(Request $request, $id) {

        $section = Section::where('id', $id)->first();

        $resourse        = new Resource;
        $resourse->name  = $request->name;

        if ($request->hasFile('doc')) {
            $file = $request->doc;
            $name = rand().time().$file->getClientOriginalName();
            $file->move(public_path().'/doc/', $name);
            $path = "doc/".$name;  
            $resourse->url  = $path;
        }

        $section->resources()->save($resourse);

        return redirect()->route('course.detail', $section->major_programs_id);
    }

    public function resourseDelete($id) {

        $resourse = Resource::where('id', $id)->first();
        $section  = Section::where('id', $resourse->section_id)->first();

        $path = public_path().$resourse->url;

        File::delete($resourse->url);

        $resourse->delete();

        return redirect()->route('course.detail', $section->major_programs_id);
    }
}
