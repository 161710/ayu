<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\matkul_mahasiswa;

class Matkul_Mahasiswa extends Model
{
   protected $table = 'matkul_mahasiswa';

	protected $fillable = array('id_mahasiswa', 'id_matkul');

	public function mahasiswa() {
		return $this->hasOne('Mahasiswa', 'id_mahasiswa');
	}

	public function matkul() {
		return $this->hasMany('Matkul', 'id_matkul');
	}
}
