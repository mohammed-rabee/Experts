<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'userCheck']);;
    }

    public function index()
    {
        //
        $admins =  User::role('admin')->get();
        return view('dashboard.admin.index', ['users' => $admins]);
    }
}
