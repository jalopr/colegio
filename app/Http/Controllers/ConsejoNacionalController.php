<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsejoNacionalController extends Controller
{
    
    public function index(){

	return view("gestiondoc.consejoNacional");
	}

}
