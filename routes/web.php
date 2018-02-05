<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('relasi-1', function() {

	
		$mahasiswa = Mahasiswa::where('nis', '=', '1015015072')->first();

		
		return $mahasiswa->wali->nama;

	});


Route::get('relasi-2', function() {

		
		$mahasiswa = Mahasiswa::where('nis', '=', '1015015072')->first();

		
		return $mahasiswa->dosen->nama;

	});


	Route::get('relasi-3', function() {

		
		$dosen = Dosen::where('nama', '=', 'Yulianto')->first();

		
		foreach ($dosen->mahasiswa as $temp)
			echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
	});

Route::get('relasi-4', function() {

		
		$a = Mahasiswa::where('nama', '=', 'Rizki Zakaria')->first();

		
		foreach ($a->matkul as $temp) 
			echo '<li>' . $temp->matkul . '</li>';
	});