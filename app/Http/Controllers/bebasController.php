<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bebasController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function bebas()
    {
    	return "Selamat Jalan Kawan";
    }
}
