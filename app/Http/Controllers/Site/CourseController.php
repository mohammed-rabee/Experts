<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\MajorPrograms;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $programs = Program::whereHas('majors', function($q) {
            $major_id = Auth::user()->major_id;
            $q->where('major_id', $major_id);
        })->paginate(5);

        return view('site.program.recommended', compact('major', 'programs'));
    }

    public function myCourses() {
        
        $courses = Auth::user()->register;

        dd($courses);
        return view('site.program.mycourse');
    }
}
