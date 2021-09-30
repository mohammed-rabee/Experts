<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        //
        $admins =  User::role('admin')->get();
        return view('dashboard.admin.index', ['users' => $admins]);
    }
}
