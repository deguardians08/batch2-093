<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
	public function getBarang(){
		$query = DB::table('barang')->get();
		dd($query);
	}

	public function getNama($nama)
	{
		$barang = Barang::where('nama', $nama)->first();
		return 'Nama Barang Adalah: ' . $barang->nama;
	}
}
