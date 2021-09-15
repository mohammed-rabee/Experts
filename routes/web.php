<?php

use App\Http\Controllers\Dashboard\CollegeController;
use App\Http\Controllers\Dashboard\DashBoardController;
use App\Http\Controllers\Dashboard\DepartmentController;
use App\Http\Controllers\Dashboard\MajorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\SiteController;
use App\Models\College;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');




Route::get('/college'                      , [CollegeController::class, 'index'])->name('college.index');
Route::get('/college/create'               , [CollegeController::class, 'create'])->name('college.create');
Route::post('/college'                     , [CollegeController::class, 'store'])->name('College.store');
Route::get('/college/{college}/edit'       , [CollegeController::class, 'edit'])->name('college.edit');
Route::put('/college/{college}'            , [CollegeController::class, 'update'])->name('college.update');
Route::delete('/college/{college}'         , [CollegeController::class, 'destroy'])->name('college.delete');

Route::get('/department'                   , [DepartmentController::class, 'index'])->name('department.index');
Route::get('/department/create'            , [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department'                  , [DepartmentController::class, 'store'])->name('department.store');
Route::get('/department/{department}/edit' , [DepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department/{department}'      , [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{department}'   , [DepartmentController::class, 'destroy'])->name('department.delete');

Route::get('/major'                        , [MajorController::class, 'index'])->name('major.index');
Route::get('/major/create'                 , [MajorController::class, 'create'])->name('major.create');
Route::post('/major'                       , [MajorController::class, 'store'])->name('major.store');
Route::get('/major/{major}/edit'           , [MajorController::class, 'edit'])->name('major.edit');
Route::put('/major/{major}'                , [MajorController::class, 'update'])->name('major.update');
Route::delete('/major/{major}'             , [MajorController::class, 'destroy'])->name('major.delete');



// Route::middleware(['auth'])->group(function () {

//     // Student & Teacher
//     Route::get('/siteHome',[SiteController::class, 'index'])->name('siteHome');

//     // Admin
//     Route::get('/dashBoardHome',[DashBoardController::class, 'index'])->name('dashBoardHome');
    
// });
