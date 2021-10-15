<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'userCheck']);;
    }
    
    public function index()
    {
        return view('dashboard.index');
    }
}
