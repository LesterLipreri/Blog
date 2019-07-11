<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
class ContactosController extends Controller
{
        public function index(){
            $contactos = Contacto::all();
            return view('contactos.index',compact('contactos'));


        }
}
