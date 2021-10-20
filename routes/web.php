<?php

use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\Dashboard\CollegeController;
use App\Http\Controllers\Dashboard\DashBoardController;
use App\Http\Controllers\Dashboard\DepartmentController;
use App\Http\Controllers\Dashboard\MajorController;
use App\Http\Controllers\Dashboard\ProgramController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Dashboard\TeacherController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\Site\CourseController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Site\SiteTeacherController;
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

Route::get('/'                                           , [SiteController::class, 'index'])->name('site.index');
Route::get('/dash'                                       , [DashBoardController::class, 'index'])->name('dash.index');
Route::get('/contact'                                    , [SiteController::class, 'contact'])->name('site.contact');
Route::get('/fags'                                       , [SiteController::class, 'fags'])->name('site.fags');
Route::get('/privacy'                                    , [SiteController::class, 'privacy'])->name('site.privacy');
Route::get('/terms'                                      , [SiteController::class, 'terms'])->name('site.terms');
Route::get('/info'                                       , [SiteController::class, 'info'])->name('site.info');
              
              
Auth::routes();              
              
              
              
              
Route::get('/college'                                    , [CollegeController::class, 'index'])->name('college.index');
Route::get('/college/create'                             , [CollegeController::class, 'create'])->name('college.create');
Route::post('/college'                                   , [CollegeController::class, 'store'])->name('College.store');
Route::get('/college/{college}/edit'                     , [CollegeController::class, 'edit'])->name('college.edit');
Route::put('/college/{college}'                          , [CollegeController::class, 'update'])->name('college.update');
Route::delete('/college/{college}'                       , [CollegeController::class, 'destroy'])->name('college.delete');
              
              
Route::get('/department'                                 , [DepartmentController::class, 'index'])->name('department.index');
Route::get('/department/create'                          , [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department'                                , [DepartmentController::class, 'store'])->name('department.store');
Route::get('/department/{department}/edit'               , [DepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department/{department}'                    , [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{department}'                 , [DepartmentController::class, 'destroy'])->name('department.delete');
              
              
Route::get('/major'                                      , [MajorController::class, 'index'])->name('major.index');
Route::get('/major/create'                               , [MajorController::class, 'create'])->name('major.create');
Route::post('/major'                                     , [MajorController::class, 'store'])->name('major.store');
Route::get('/major/{major}/edit'                         , [MajorController::class, 'edit'])->name('major.edit');
Route::put('/major/{major}'                              , [MajorController::class, 'update'])->name('major.update');
Route::delete('/major/{major}'                           , [MajorController::class, 'destroy'])->name('major.delete');
              
              
Route::get('/program'                                    , [ProgramController::class, 'index'])->name('program.index');
Route::get('/program/create'                             , [ProgramController::class, 'create'])->name('program.create');
Route::post('/program'                                   , [ProgramController::class, 'store'])->name('program.store');
Route::get('/program/{program}/edit'                     , [ProgramController::class, 'edit'])->name('program.edit');
Route::put('/program/{program}'                          , [ProgramController::class, 'update'])->name('program.update');
Route::delete('/program/{program}'                       , [ProgramController::class, 'destroy'])->name('program.delete');
Route::get('/pendingResgiter'                            , [ProgramController::class, 'pendingApprovel'])->name('program.pendingResgiter');
Route::get('/pendingResgiter/confirm/{id}'               , [ProgramController::class, 'pendingApprovelConfirm'])->name('program.pendingApprovelConfirm');
Route::get('/pendingResgiter/delete/{id}'                , [ProgramController::class, 'pendingApprovelDelete'])->name('program.pendingApprovelDelete');
Route::get('/disableRegister'                            , [ProgramController::class, 'disableList'])->name('program.disableRegister');
Route::get('/disableRegistration/{id}'                   , [ProgramController::class, 'disableRegistration'])->name('program.disableRegistration');
     
     
Route::get('/section'                                    , [SectionController::class, 'index'])->name('section.index');
Route::get('/section/create'                             , [SectionController::class, 'create'])->name('section.create');
Route::post('/section'                                   , [SectionController::class, 'store'])->name('section.store');
Route::get('/section/{section}/edit'                     , [SectionController::class, 'edit'])->name('section.edit');
Route::put('/section/{section}'                          , [SectionController::class, 'update'])->name('section.update');
Route::delete('/section/{section}'                       , [sectionController::class, 'destroy'])->name('section.delete');
     
     
Route::get('/user'                                       , [UserController::class, 'index'])->name('user.index');
Route::get('/user/create'                                , [UserController::class, 'create'])->name('user.create');
Route::post('/user'                                      , [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit'                           , [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}'                                , [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}'                             , [UserController::class, 'destroy'])->name('user.delete');
     
     
     
     
Route::get('/teacher'                                    , [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/disabledTeacher'                            , [TeacherController::class, 'disabledTeacher'])->name('teacher.disabledTeacher');
Route::get('/teacher/{user}/assign'                      , [TeacherController::class, 'assign'])->name('teacher.assign');
Route::post('/teacher/{user}/assignClass'                , [TeacherController::class, 'assignClass'])->name('teacher.assignClass');
Route::get('/teacher/{user}/editAssign'                  , [TeacherController::class, 'editAssign'])->name('teacher.editAssign');
Route::post('/teacher/{user}/editAssignClass'            , [TeacherController::class, 'editAssignClass'])->name('teacher.editAssignClass');
     
Route::get('/student'                                    , [StudentController::class, 'index'])->name('student.index');
Route::get('/pendingUser'                                , [StudentController::class, 'pendingApprovel'])->name('student.pendingUser');
Route::get('/student/{user}/activate'                    , [StudentController::class, 'activate'])->name('student.activate');
Route::get('/student/{user}/disable'                     , [StudentController::class, 'disable'])->name('student.disable');
Route::get('/student/{user}/assign'                      , [StudentController::class, 'assign'])->name('student.assign');
Route::post('/student/{user}/assignClass'                , [StudentController::class, 'assignClass'])->name('student.assignClass');
Route::get('/student/{user}/editAssign'                  , [StudentController::class, 'editAssign'])->name('student.editAssign');
Route::post('/student/{user}/editAssignClass'            , [StudentController::class, 'editAssignClass'])->name('student.editAssignClass');

Route::get('/admin'                                      , [AdminController::class, 'index'])->name('admin.index');

Route::get('/recommendedCourses'                         , [CourseController::class, 'recommendedCourses'])->name('recommendedCourses');
Route::get('/mycourses'                                  , [CourseController::class, 'myCourses'])->name('myCourses');

Route::get('/course/{id}'                                , [CourseController::class, 'details'])->name('course.detail');
Route::get('/program/register/{id}'                      , [CourseController::class, 'register'])->name('program.register');
Route::post('/session/store/{id}'                        , [SiteTeacherController::class, 'sessionStore'])->name('session.store');
Route::post('/session/modify/{id}'                       , [SiteTeacherController::class, 'sessionModify'])->name('session.modify');
Route::get('/session/delete/{id}'                        , [SiteTeacherController::class, 'sessionDelete'])->name('session.delete');
Route::post('/section/AddDoc/{id}'                       , [SiteTeacherController::class, 'sectionAddDoc'])->name('section.addDoc');
Route::get('/resourse/delete/{id}'                       , [SiteTeacherController::class, 'resourseDelete'])->name('resourse.delete');
