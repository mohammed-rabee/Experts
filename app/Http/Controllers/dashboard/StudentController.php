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

    public function assignClass(User $user) {

        return view('dashboard.user.assign', compact('user'));

    }
    
    public function editAssignClass(User $user) {

        return view('dashboard.user.editAssign', compact('user'));

    }
}
