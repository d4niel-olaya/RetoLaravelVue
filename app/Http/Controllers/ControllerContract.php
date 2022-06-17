<?php

namespace App\Http\Controllers;
use App\Models\Contract;
use Illuminate\Http\Request;

class ControllerContract extends Controller
{
    public function showContracts(){
        $contracts = Contract::get();
        return view('showContracts',['contracts' => $contracts]);
    }
}
