<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use Illuminate\Http\Request;

class ControllerContract extends Controller
{
    public function showContracts(){
        $contracts = Contract::where('estado',1)->get();
        return view('showContracts',['contracts' => $contracts]);
    }
    public function update(Request $request){
        if($request -> newValue == 'deleteMe'){
            Contract::where('id', $request->idContrato)
                ->update(['estado'=>false]);
        }
        else{
            Contract::where('id', $request->idContrato)
                ->update(['tipo'=>$request->newValue]);
        }
        return view('indexContract');
    }
}
