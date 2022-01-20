<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Que_Tal_Estas extends Controller
{
   
   /**
    * CuentaNumeros 
    *
    * @param integer $num
    * @return void
    */
    public function CuentaNumeros (int $num=10){
        $downgrade = "" ; 
        for($num;$num>0;$num--){
            $downgrade+="[$num]";
        }
        return $downgrade;
    }
}
