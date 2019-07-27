<?php

namespace App\Http\Controllers;

use App\Teacher;
use App\Country;
use App\Provincia;
use App\Canton;
use App\Distrito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;

class TeachersController extends Controller
{
    /**
     * Show the profile for the given teacher.
     *
     * @param  int  $id
     * @return Response
     */
     //Muestra los datos de un usuario
    public function show($id)
    {
        $teacher = Teacher::find($id);
        $nacionalidad = Country::where('iso3166a1', '=', $teacher->nationality)->get()[0]['nombre'];
        $provincia = Provincia::where('numeroProvincia', '=', $teacher->province)->get()[0]['nombre'];
        $canton = Canton::where('numeroCanton', '=', $teacher->canton)->get()[0]['nombre'];
        $distrito = Distrito::where('numeroDistrito', '=', $teacher->district)->get()[0]['nombre'];
        $teacher->nationality = $nacionalidad;
        $teacher->province = $provincia;
        $teacher->canton = $canton;
        $teacher->district = $distrito;
        return view('teachers.show')->with('teacher', $teacher);
    }
    
    //Muestra todos los usuarios existentes
    public function index(Request $request)
    {
        $teachers = Teacher::search($request->name)->orderBy('name', 'ASC')->paginate(10);
        return view('teachers.index')->with('teachers',$teachers);
    }
    
    //Muestra el formulario para crear usuarios
    public function create()
    {
        $countries = Country::all();
        $provincias = Provincia::all();
        $variables = ['provincias' => $provincias, 'countries' => $countries];
        return view('teachers.create')->with('variables',$variables);
    } 
    
    //Almacena un usuario
    public function store(StoreTeacherRequest $request)
    {
        $teacher = new Teacher($request->all());
        //dd($teacher);
        $teacher->name = ucwords(strtolower($teacher->name));
        $teacher->last_name = ucwords(strtolower($teacher->last_name));
        $teacher->email = strtolower($teacher->email);
        $teacher->cell_phone = str_replace("-","",$teacher->cell_phone);
        //dd($teacher->all());
        if(!is_null($teacher->home_phone)){
            $teacher->home_phone = str_replace("-","",$teacher->home_phone);    
        }
        if(!is_null($teacher->work_phone)){
            $teacher->work_phone = str_replace("-","",$teacher->work_phone);
        }
        $teacher->save();
        flash('Se ha almacenado el profesor '.$teacher->name.' '.$teacher->last_name)->success();
        return redirect()->route('teachers.index');
    }
    
    //Muestra el formulario para editar un usuario
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $countries = Country::all();
        $provincias = Provincia::all();
        $cantones = Canton::cantones($teacher->province);
        $distritos = Distrito::where('numeroCanton', '=', $teacher->canton)->get();
        //dd($teacher);
        $variables = ['provincias' => $provincias, 'countries' => $countries, 'cantones' => $cantones, 'distritos' => $distritos, 'teacher' => $teacher];
        return view('teachers.edit')->with('variables',$variables);
    }
    
    //Actualiza un usuario en la DB
    public function update(UpdateTeacherRequest $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->fill($request->all());
        $teacher->name = ucwords(strtolower($teacher->name));
        $teacher->last_name = ucwords(strtolower($teacher->last_name));
        $teacher->email = strtolower($teacher->email);
        $teacher->cell_phone = str_replace("-","",$teacher->cell_phone);
        //dd($teacher->all());
        if(!is_null($teacher->home_phone)){
            $teacher->home_phone = str_replace("-","",$teacher->home_phone);    
        }
        if(!is_null($teacher->work_phone)){
            $teacher->work_phone = str_replace("-","",$teacher->work_phone);
        }
        $teacher->save();
        flash('Se ha actualizado el profesor '.$teacher->name.' '.$teacher->last_name)->warning();
        //return back();
        return redirect()->route('teachers.index');
    }
    
    //Elimina un usuario del todo 
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        flash('Se ha eliminado el profesor '.$teacher->name.' '.$teacher->last_name)->error();
        return redirect()->route('teachers.index');
    }
}