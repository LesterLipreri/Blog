<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index($nombre){
        return  view('pruebas.index',compact('nombre'));
    }
}
