<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index() {
        return view('site.index');
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
