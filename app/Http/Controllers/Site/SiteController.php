<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\Program;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function courseList() {
        
        return view('site.program.index');
    }

    public function index() {

        $majors = Major::all();
        return view('site.index', compact('majors'));
    }
    
    public function fags() {
        
        $majors = Major::all();
        return view('site.extra.fags', compact('majors'));
    }

    public function terms() {
        
        $majors = Major::all();
        return view('site.extra.terms', compact('majors'));
    }

    public function privacy() {

        $majors = Major::all();
        return view('site.extra.privacy', compact('majors'));
    }

    public function contact() {

        $majors = Major::all();
        return view('site.extra.contact', compact('majors'));

    }
}
