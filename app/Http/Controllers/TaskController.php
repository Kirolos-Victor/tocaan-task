<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function task(Request $request){
        return $request->except('_token');
    }

}
