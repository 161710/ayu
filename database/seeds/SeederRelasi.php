<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Jurusan;
use App\Mahasiswa;
use App\Wali;
use App\Matkul;
use App\Matkul_Mahasiswa;

class SeederRelasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dosen')->delete();
        DB::table('jurusan')->delete();
    	DB::table('mahasiswa')->delete();
    	DB::table('wali')->delete();
    	DB::table('matkul')->delete();
    	DB::table('matkul_mahasiswa')->delete();

    	// isi seeder
		

		// Dosen

		$dosen = Dosen::create(array(
			'nama' => 'Yulianto',
			'nipd' => '1234567890',
			'alamat' => 'jln.sampora'));

		$this->command->info('Data dosen telah diisi!');


         // Jurusan

		$tkr = Jurusan::create(array(
			'nama' => 'Tekhnik Kendaraan Ringan'));

		$tsm = Jurusan::create(array(
			'nama' => 'Tekhnik Sepeda Motor'));

        $rpl = Jurusan::create(array(
			'nama' => 'Rekayasa perangkat Lunak'));

		$this->command->info('Jurusan telah diisi!');

        
        // Matkul

		$mtk = Matkul::create(array(
			'nama' => 'Matematika',
			'kkm' => '75'));

		$ipa = Matkul::create(array(
			'nama' => 'Ilmu Pengetahuan Alam',
			'kkm' => '75'));

        $ips = Matkul::create(array(
			'nama' => 'Ilmu Pengetahuan Sosial',
			'kkm' => '75'));

		$this->command->info('Matkul telah diisi!');

         
         // Mahasiswa

        $a= Mahasiswa::create(array(
			'nama' => 'Rizki Zakaria',
			'nis'  => '1015015072',
			'id_dosen' => dosen->id,
		    'id_jurusan' => $tkr->id));

		$b = Mahasiswa::create(array(
			'nama' => 'Diar Pajriana',
			'nis'  => '1015015088',
			'id_dosen' => $dosen->id,
		    'id_jurusan' => $tsm->id));

		$c = Mahasiswa::create(array(
			'nama' => 'Raymond Riezkhi',
			'nis'  => '1015015078',
			'id_dosen' => $dosen->id,
		    'id_jurusan' => $rpl->id));

		$this->command->info('Mahasiswa telah diisi!');

        
        // Wali
		
		Wali::create(array(
			'nama'  => 'Achmad S',
			'alamat'  => 'Cilok',
			'id_mahasiswa' => $a>id
		));
		
		Wali::create(array(
			'nama'  => 'cucu',
			'alamat'  => 'Cibiru',
			'id_mahasiswa' => $b->id
		));
		
		Wali::create(array(
			'nama'  => 'kokom',
			'alamat'  => 'Cisiuk',
			'id_mahasiswa' => $c->id
		));

		$this->command->info('Data mahasiswa dan wali telah diisi!');

           
        // Matkul Mahasiswa

		    Matkul_Mahasiswa::create(array(
			'id_mahasiswa' => $a->id,
		    'id_matkul' => $mtk->id));

		    $this->command->info('Matkul_Mahasiswa telah diisi!');

		

        // $this->call(UsersTableSeeder::class);
    }
}


