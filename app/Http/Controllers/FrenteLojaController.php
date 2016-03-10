<?php

namespace Shoppvel\Http\Controllers;

use Illuminate\Http\Request;

use Shoppvel\Http\Requests;

class FrenteLojaController extends Controller
{
    function getIndex() {
		return view('layouts.frente-loja');
	}
}
