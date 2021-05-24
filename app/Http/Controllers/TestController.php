<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request, $id){

        return response()->json(["params" => $id], 200);
    }
}
