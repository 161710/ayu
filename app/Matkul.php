<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\matkul;

class Matkul extends Model
{
	protected $table = 'matkul';

	protected $fillable = array('nama', 'kkm');
}