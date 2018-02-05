<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\mahasiswa;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

	protected $fillable = array('nama', 'nis', 'id_dosen', 'id_jurusan');

	public function dosen() {
		return $this->hasOne('Dosen', 'id_dosen');
	}

	public function jurusan() {
		return $this->hasOne('Jurusan', 'id_jurusan');
	}
}
