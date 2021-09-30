<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class TeacherController extends Controller
{
    //
    public function index()
    {
        //
        $teachers =  User::role('teacher')->get();
        return view('dashboard.teacher.index', ['users' => $teachers]);
    }

}
