<?php

namespace UnoCommerce\Http\Controllers;

use Illuminate\Http\Request;

use UnoCommerce\Http\Requests;

class FrenteLojaController extends Controller
{
    function getIndex() {
		return view('layouts.frente-loja');
	}
}
