<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        //
        $students =  User::role('student')->get();
        return view('dashboard.student.index', ['users' => $students]);
    }
}
