<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LessonsModel ;

class api extends Controller
{
    public function index(){
        return response()->json(
            [
                'csrf' => 'Acme\Http\Middleware\VerifyCsrfToken'

            ]
        );

       // $data = LessonsModel::all()->toArray();
        //return $this->trans($data);
       /* return response()->json(
            [
                "data" => $data
            ]
        );*/

    }
    public function trans($data=[]){
       
          // 'csrf' => 'Acme\Http\Middleware\VerifyCsrfToken'
      
    }
}
