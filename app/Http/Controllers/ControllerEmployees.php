<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class ControllerEmployees extends Controller
{
    public function index(){
        $listado = Employee::get();
        return view('showEmployees', ['listado' => $listado]);
    }

    public function Insertar(Request $request){
        $emp = new Employee();
        $nombre = $request -> nombre;
        $apellido =$request -> apellido;
        $tipo = $request -> tipoc;
        $sexo = $request-> sexo;
        $emp -> nombre = $nombre;
        $emp -> contractId = $tipo;
        $emp -> apellido = $apellido;
        $emp -> sexo = $sexo;
        $emp -> save();
        if($emp -> save()){
            $estado = 'ok';
        }
        else{
            $estado = 'no';
        }
        return view('createEmployee', ['state'=>$estado]);
    }
}
