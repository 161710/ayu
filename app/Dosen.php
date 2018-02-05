<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\dosen;

class Dosen extends Model
{
     protected $table = 'dosen';

	protected $fillable = array('nama', 'nipd', 'alamat');
}