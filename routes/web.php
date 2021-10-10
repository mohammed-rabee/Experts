<?php

use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\Dashboard\CollegeController;
use App\Http\Controllers\Dashboard\DepartmentController;
use App\Http\Controllers\Dashboard\MajorController;
use App\Http\Controllers\Dashboard\ProgramController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Dashboard\TeacherController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\HomeController;
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


Route::get('/program'                      , [ProgramController::class, 'index'])->name('program.index');
Route::get('/program/create'               , [ProgramController::class, 'create'])->name('program.create');
Route::post('/program'                     , [ProgramController::class, 'store'])->name('program.store');
Route::get('/program/{program}/edit'       , [ProgramController::class, 'edit'])->name('program.edit');
Route::put('/program/{program}'            , [ProgramController::class, 'update'])->name('program.update');
Route::delete('/program/{program}'         , [ProgramController::class, 'destroy'])->name('program.delete');


Route::get('/section'                               , [SectionController::class, 'index'])->name('section.index');
Route::get('/section/create'                        , [SectionController::class, 'create'])->name('section.create');
Route::post('/section'                              , [SectionController::class, 'store'])->name('section.store');
Route::get('/section/{section}/edit'                , [SectionController::class, 'edit'])->name('section.edit');
Route::put('/section/{section}'                     , [SectionController::class, 'update'])->name('section.update');
Route::delete('/section/{section}'                  , [sectionController::class, 'destroy'])->name('section.delete');


Route::get('/user'                                  , [UserController::class, 'index'])->name('user.index');
Route::get('/user/create'                           , [UserController::class, 'create'])->name('user.create');
Route::post('/user'                                 , [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit'                      , [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}'                           , [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}'                        , [UserController::class, 'destroy'])->name('user.delete');


Route::get('/teacher'                               , [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher/{user}/assign'                 , [TeacherController::class, 'assignClass'])->name('teacher.assign');
Route::get('/teacher/{user}/editAssign'             , [TeacherController::class, 'editAssignClass'])->name('teacher.editAssign');

Route::get('/student'                               , [StudentController::class, 'index'])->name('student.index');
Route::get('/student/{user}/assign'                 , [StudentController::class, 'assign'])->name('student.assign');
Route::post('/student/{user}/assignClass'                  , [StudentController::class, 'assignClass'])->name('student.assignClass');
Route::get('/student/{user}/editAssign'             , [StudentController::class, 'editAssignClass'])->name('student.editAssign');

Route::get('/admin'                        , [AdminController::class, 'index'])->name('admin.index');
// Route::get('/admin/create'                 , [AdminController::class, 'create'])->name('admin.create');
// Route::post('/admin'                       , [AdminController::class, 'store'])->name('admin.store');
// Route::get('/admin/{admin}/edit'           , [AdminController::class, 'edit'])->name('admin.edit');
// Route::put('/admin/{admin}'                , [AdminController::class, 'update'])->name('admin.update');
// Route::delete('/admin/{admin}'             , [AdminController::class, 'destroy'])->name('admin.delete');


// Route::middleware(['auth'])->group(function () {

//     // Student & Teacher
//     Route::get('/siteHome',[SiteController::class, 'index'])->name('siteHome');

//     // Admin
//     Route::get('/dashBoardHome',[DashBoardController::class, 'index'])->name('dashBoardHome');
    
// });
