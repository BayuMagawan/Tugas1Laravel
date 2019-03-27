<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
	{
	 $produk = 'Aqua 400ML';
return view('produk/index',compact('produk'));

	}
}
