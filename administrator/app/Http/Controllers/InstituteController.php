<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Institute;
use App\Models\InstituteCourses;
use App\Models\State;
use App\Models\Country;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class InstituteController extends Controller
{
    public $_statusOK = 200;
    public $_statusErr = 500;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            $institutes = Institute::all();
            return view('institutes.index',compact('institutes'));
        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }
        
    }


    public function show($id)
    {
        try {
            $states = State::all();
            $countries = Country::all();
            $institute = Institute::find($id);
            return view('institutes.show',compact('institute','states','countries'));
        } catch(\Illuminate\Database\QueryException $e){
        }        
    }

    public function add() {
        $states = State::all();
        $countries = Country::all();

        return view('institutes.add',compact('states','countries'));
    }

    public function save(Request $request) {
        $data = $request->all();

        $validatedData = $request->validate([
            'title' => 'required',
            'shortname' => 'required',
        ]);

        if($data['institute_id'] <= 0){
            $request->validate([
                'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'brouchure' => 'mimes:pdf|max:2048',
            ]);
           
        }

        if ($request->hasFile('cover')) {
            $coverFile = time().'.'.$request->cover->extension();  
            $request->cover->move(public_path('images'), $coverFile);
            $data['cover'] = "institute/".$coverFile;
        }

        if ($request->hasFile('logo')) {
            $logoFile = time().'.'.$request->logo->extension();  
            $request->logo->move(public_path('images'), $logoFile);
            $data['logo'] = "institute/".$logoFile;
        }

        if ($request->hasFile('brouchure')) {
            $brouchureFile = $request->file('brouchure')->getClientOriginalName();  
            $request->brouchure->move(public_path('images'), $brouchureFile);
            //Storage::disk('global_path')->put("institute/".$brouchureFile, $request->file('brouchure'));
            $data['brouchure'] = "institute/".$brouchureFile;
        }

        // if ($request->hasFile('cover')) {
        //     $image      = $request->file('cover');
        //     $coverFile   = time() . '.' . $image->getClientOriginalExtension();

        //     $img = Image::make($image->getRealPath());
        //     // $img->resize(120, 120, function ($constraint) {
        //     //     $constraint->aspectRatio();                 
        //     // });

        //     // $img->stream(); // <-- Key point
            
        //     Storage::disk('public')->put($coverFile, $img, 'public');
        // }


        
        
        
        if($data['institute_id'] <= 0){
            Institute::create($data);
        } else {
            $institute = Institute::findOrFail($data['institute_id']);
            $institute->update($data);
        }
        
        return redirect('/institutes');

    }

    public function delete() {

    }

    public function instituteCourses($id)
    {
        try {
            $institute_id = $id;
            $courses = InstituteCourses::where('institute_id', $id)->get();
            return view('institutes.courselist',compact('courses','institute_id'));

        } catch(\Illuminate\Database\QueryException $e){
            return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
        }
        
    }

    public function addInstitutecourse($id){
        $institute_id = $id;
        $courses = Course::all();

        return view('institutes.course-add',compact('courses','institute_id'));
    }

    public function saveCourse(Request $request){
        $data = $request->all();
        InstituteCourses::create($data);
        return redirect('/institute-course/'.$request->institute_id);
    }

    // public function courses()
    // {
    //     try {
    //         $course = Course::all();
    //         return response()->json($course,$this->_statusOK);
    //     } catch(\Illuminate\Database\QueryException $e){
    //         return response()->json(['error' => $e->errorInfo[2]], $this->_statusErr);
    //     }
        
    // }


}
