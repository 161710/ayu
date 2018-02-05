<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\jurusan;

class Jurusan extends Model
{
     protected $table = 'jurusan';

	protected $fillable = array('nama');
}
