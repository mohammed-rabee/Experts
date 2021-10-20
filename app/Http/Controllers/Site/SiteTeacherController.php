<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteTeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'teacherCheck']);;
    }
    //
    public function sessionStore(Request $request, $id) {

        $section = Section::where('id', $id)->first();

        $session             = new Session;
        $session->name       = $request->name;
        $session->url        = $request->url;
        $session->time       = $request->time;
        $session->annoncment = $request->annoncment;

        $session = $section->sessions()->save($session);

        return redirect()->route('course.detail', $section->major_programs_id);
    }

    public function sessionModify(Request $request, $id) {

        $teacher = true;

        $session = Session::where('id', $id)->first();

        $section = Section::where('id', $session->section_id)->first();

        $session->update($request->all());

        return redirect()->route('course.detail', $section->major_programs_id);
    }

    public function sessionDelete($id) {

        $teacher = true;

        $session = Session::where('id', $id)->first();

        $section = Section::where('id', $session->section_id)->first();

        $session->delete();

        return redirect()->route('course.detail', $section->major_programs_id);
    }

    public function sectionAddDoc(Request $request, $id) {

        $section = Section::where('id', $id)->first();

        $resourse        = new Resource;
        $resourse->name  = $request->name;

        if ($request->hasFile('doc')) {
            $file = $request->doc;
            $name = rand().time().$file->getClientOriginalName();
            $file->move(public_path().'/doc/', $name);
            $path = "doc/".$name;  
            $resourse->url  = $path;
        }

        $section->resources()->save($resourse);

        return redirect()->route('course.detail', $section->major_programs_id);
    }

    public function resourseDelete($id) {

        $resourse = Resource::where('id', $id)->first();
        $section  = Section::where('id', $resourse->section_id)->first();

        $path = public_path().$resourse->url;

        File::delete($resourse->url);

        $resourse->delete();

        return redirect()->route('course.detail', $section->major_programs_id);
    }
}
