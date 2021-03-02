<?php
namespace App\Http\Controllers;

use App\children;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ChildrenController extends Controller
{

 public function home(){

        $total = children:: all()->count();
        $childrens = children::orderBy('id', 'DESC')->paginate(5);
        return view('home', compact('childrens','total'));
}


public function SaveChildren(Request $request){
        
        $dataChildren = new children();
        
        $dataChildren->name    =$request->get('name');
        $dataChildren->year    =$request->get('year');
        $dataChildren->sex     =$request->get('sex');

        $dataChildren->save(); 


        $total = children:: all()->count();
        $childrens = children::orderBy('id', 'DESC')->paginate(5);
        
        
        Session::flash('message', 'Felicitaciones .! Niño Registrado Correctamente ...');
        return redirect('/')->with('childrens','total');
}


public function deleteChildren($id){

        $DatosChildren = children::find($id);
        $nombreChildre = $DatosChildren->name;
        $DatosChildren->delete();

        $total = children:: all()->count();
        $childrens = children::orderBy('id', 'DESC')->paginate(5);
        return redirect('/')->with('msjdelete', 'El Niño ('.$nombreChildre.') Fue eliminado Correctamente.','childrens','total');
}


public function updateChildren(Request $request, $id){

    $DatosChildren = children:: findOrFail($id); 

    $DatosChildren->name     = $request->name;
    $DatosChildren->sex      = $request->sex;
    $DatosChildren->year     = $request->year;

    $DatosChildren->save();

    $total = children:: all()->count();
    $childrens = children::orderBy('id', 'DESC')->paginate(5);
    return redirect('/')->with('msjupdate','Datos del Niño ('. $DatosChildren->name .') Actualizados Correctamente', 'childrens','total');
 }



}
