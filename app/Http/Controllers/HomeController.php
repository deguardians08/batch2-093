<?php

namespace App\Http\Controllers;

use App\Barang;

class HomeController extends Controller
{
	public function getHome(){
		/*$query = barang::destroy(2);*/
		$query = barang::where('nama','Uji')->delete();
		$barang = barang::all();
		dd($barang);
		/*return view ('welcome');*/
	}
	public function getHome1(){
		
	}
}

