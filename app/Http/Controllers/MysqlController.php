<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class MysqlController extends Controller
{
    public function registrarCurp(Request $requiest){
        $requiest->validate([
            'curp'=>'required | min:18'
            
        ]);

        $nuvaCurp = new Registro();
        $nuvaCurp->user_id='1';
        $nuvaCurp->curp=$requiest->curp;

        $nuvaCurp->save();

        return view('registro');
       
    }
    
}
