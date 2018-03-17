<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
	public function getNama($nama)
	{
		$barang = Barang::where('nama', '$nama')->first();
		return 'Nama Barang Adalah:' . $barang->$nama;
	}

	public function getAlamat(){

	}
}
/*
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
}*/
