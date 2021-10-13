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
        return view('site.extra.fags');
    }

    public function terms() {
        return view('site.extra.terms');
    }

    public function privacy() {
        return view('site.extra.privacy');
    }

    public function contact() {
        return view('site.extra.contact');
    }
}
