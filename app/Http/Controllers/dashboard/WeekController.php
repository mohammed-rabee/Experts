<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class WeekController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware(['auth', 'userCheck']);;
    }

    // //
    // public function index(Program $program)
    // {
    //     dd($program);
    //     //
    //     $weeks = $program->weeks->get();
    //     return view('dashboard.program.index', ['program' => $program, 'weeks' => $weeks]);
    // }
}
