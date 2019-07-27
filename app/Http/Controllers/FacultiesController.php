<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Teacher;
use App\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFacultyRequest;
use App\Http\Requests\UpdateFacultyRequest;

class FacultiesController extends Controller
{
    /**
     * Show the profile for the given teacher.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $faculty = Faculty::find($id);
        $careers = Career::where('id_faculty', '=', $faculty->id)->get();
        //dd($careers);
        return view('faculties.show')->with('faculty', $faculty)->with('careers', $careers);
    }
    
    public function index(Request $request)
    {
        $teachers = Teacher::orderBy('name', 'ASC')->get(['name', 'last_name', 'id']);
        $faculties = Faculty::search($request->faculty_name)->orderBy('id', 'ASC')->paginate(10);
        return view('faculties.index')->with('faculties',$faculties)->with('teachers', $teachers);
    }
    
    public function create()
    {   
        
        $teachers = Teacher::orderBy('name', 'ASC')->get(['name', 'last_name', 'id']);
        foreach($teachers as $teacher){
            $aux[$teacher->id] = $teacher->name . ' ' . $teacher->last_name;
        }
        return view('faculties.create')->with('teachers', $aux);
    } 
    
    public function store(StoreFacultyRequest $request)
    {
        $faculty = new Faculty($request->all());
        //dd($teacher);
        $faculty->faculty_name = ucwords(strtolower($faculty->faculty_name));
        $faculty->save();
        flash('Se ha creado la Facultad de '.$faculty->faculty_name)->success();
        return redirect()->route('faculties.index');
    }
    
    public function edit($id)
    {
        $faculty = Faculty::find($id);
        //dd($faculty);
        $aux = [];
        $teachers = Teacher::orderBy('name', 'ASC')->get(['name', 'last_name', 'id']);
        foreach($teachers as $teacher){
            $aux[$teacher->id] = $teacher->name . ' ' . $teacher->last_name;
        }
        return view('faculties.edit')->with('faculty', $faculty)->with('teachers', $aux);
    }
    
    public function update(UpdateFacultyRequest $request, $id)
    {
        //dd($request);
        $faculty = Faculty::find($id);
        $faculty->fill($request->all());
        $faculty->faculty_name = ucwords(strtolower($faculty->faculty_name));
        $faculty->save();
        flash('Se han actualizado los datos de la facultad de '.$faculty->faculty_name)->warning();
        return redirect()->route('faculties.index');
    }
    
    public function destroy($id)
    {
        $faculty = Faculty::find($id);
        $faculty->delete();
        flash('Se ha eliminado la Facultad de '.$faculty->faculty_name)->error();
        return redirect()->route('faculties.index');
    }
}