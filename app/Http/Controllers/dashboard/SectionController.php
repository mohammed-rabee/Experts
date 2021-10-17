<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Major;
use App\Models\MajorPrograms;
use App\Models\Program;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'userCheck']);;
    }
    
    //
    public function index()
    {
        //
        $sections = Section::paginate(5);
        $sections->transform(function ($item){
            $item->programName = Program::where('id', $item->majorPrograms->program_id)->value('name');
            $item->majorName   = Major::where('id', $item->majorPrograms->major_id)->value('name');
            return $item;
        });

        return view('dashboard.section.index', ['sections' => $sections]);
    }

    public function create()
    {
        //
        // $programs = Program::with('majors')->get();

        $majorPorgrams = MajorPrograms::all();

        $majorPorgrams->transform(function ($item){
            // $item->programName = Program::find($item->program_id, 'name');
            // $item->majorName   = Major::find($item->major_id, 'name');
            $item->programName = Program::where('id', $item->program_id)->value('name');
            $item->majorName   = Major::where('id', $item->major_id)->value('name');

            return $item;
        });

        // dd($majorPorgrams->all());

        // $programView = [
        //     'id' => 0,
        //     'Program Name' => 0,
        //     'Major Name' => 0,
        // ];
        // $test = array();

        // foreach ($programs as $program) {
        //     $test[] = $program->majors;
        // }

        // dd($test);
        
        // dd($programs->majors->all());
        return view('dashboard.section.create', [ 'programs' => $majorPorgrams]);

    }

    public function store(Request $request)
    {
        //
        // dd($request->all());
        try {
            Section::create($request->all());
            return redirect()->route('section.index')
            ->withErrors([
                'message' => 'Section created successfully.',
                'class'   => 'alert-success'
            ]);
        } catch (Exception $e) {
            return back()->withErrors([
                'message' => 'Section name already registered',
                'class'   => 'alert-danger'
            ]);
        }   
    }

    public function edit(Section $section)
    {

        $programs = MajorPrograms::all();
        $keys   = $programs->modelKeys();

        $programs->transform(function ($item){
            $item->programName = Program::where('id', $item->program_id)->value('name');
            $item->majorName   = Major::where('id', $item->major_id)->value('name');

            return $item;
        });
        
        return view('dashboard.section.edit', compact('section', 'programs', 'keys'));
    }

    public function update(Request $request,Section $section)
    {
        //
        try {

            $section->update($request->all());
            return redirect()->route('section.index')
            ->withErrors([
                'message' => 'Section created successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => 'You need to choose another name , Section name already been taken',
                'class'   => 'alert-danger'
            ]);
        }
    }

    public function destroy(Section $section)
    {
        //
        try {

            $section->delete();
            return redirect()->route('section.index')
            ->withErrors([
                'message' => 'Section Deleted successfully.',
                'class'   => 'alert-success'
            ]);

        } catch (Exception $e) {

            return back()->withErrors([
                'message' => 'Section did not deleted successfully',
                'class'   => 'alert-danger'
            ]);

        }
    }
}
