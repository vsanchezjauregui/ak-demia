<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Career;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareerRequest;
use App\Http\Requests\UpdateCareerRequest;

class CareersController extends Controller
{
    /**
     * Show the profile for the given teacher.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $career = Career::find($id);
        $faculty = Faculty::where('id', '=', $career->id_faculty)->get(['faculty_name']);
        $cheif = Teacher::where('id', '=', $career->career_cheif)->get(['name', 'last_name']);
        if (count($faculty)>0){
            $career->id_faculty = $faculty[0]->faculty_name;
        }
        if (count($cheif)>0){
            $career->career_cheif = $cheif[0]->name . ' ' . $cheif[0]->last_name;
        }
        return view('careers.show')->with('career', $career);
    }
    
    public function index(Request $request)
    {
        $careers = Career::search($request->career_name)->orderByRaw('IF(id_faculty IS NULL,1,0) ASC')->paginate(10);
        $teachers = Teacher::orderBy('name', 'ASC')->get(['name', 'last_name', 'id']);
        $faculties = Faculty::orderBy('id', 'ASC')->get(['faculty_name', 'id']);
        return view('careers.index')->with('faculties',$faculties)->with('careers', $careers)->with('teachers', $teachers); 
    }
    
    public function create($facultad = null) 
    {   
        
        $teachers = Teacher::orderBy('name', 'ASC')->get(['name', 'last_name', 'id']);
        $faculties = Faculty::orderBy('faculty_name')->pluck('faculty_name', 'id');
        foreach($teachers as $teacher){
            $aux[$teacher->id] = $teacher->name . ' ' . $teacher->last_name;
        }
        return view('careers.create')->with('teachers', $aux)->with('faculties',$faculties)->with('facultad', $facultad);
    } 
    
    public function store(StoreCareerRequest $request)
    {
        $career = new Career($request->all());
        $career->career_name = ucwords(strtolower($career->career_name));
        $career->save();
        flash('Se ha creado la Carrera de '.$career->career_name)->success();
        return redirect()->route('careers.index');
    }
    
    public function edit($id)
    {
        $career = Career::find($id);
        $aux = [];
        $teachers = Teacher::orderBy('name', 'ASC')->get(['name', 'last_name', 'id']);
        foreach($teachers as $teacher){
            $aux[$teacher->id] = $teacher->name . ' ' . $teacher->last_name;
        }
        $faculties = Faculty::orderBy('faculty_name')->pluck('faculty_name', 'id');
        return view('careers.edit')->with('career', $career)->with('faculties', $faculties)->with('teachers', $aux);
    }
    
    public function update(UpdateCareerRequest $request, $id)
    {
        $career = Career::find($id);
        $career->fill($request->all());
        $career->career_name = ucwords(strtolower($career->career_name));
        $career->save();
        flash('Se han actualizado los datos de la carrera de '.$career->career_name)->warning();
        return redirect()->route('careers.index');
    }
    
    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        flash('Se ha eliminado la Carrera de '.$career->career_name)->error();
        return redirect()->route('careers.index');
    }
}