<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Hobi;
use Illuminate\Support\Facades\DB;

use App\Models\Dosen;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        // Siapkan Seeder Dosen Disini DB::table('dosens')->delete();
        $dosen = Dosen::create(array(
            'nama' => 'Eko',
            'nipd' => '1234567890'
        ));
        # Kemudian tambahkan nilai id_dosen ditiap record mahasiswa

        // Kita akan membuat 3 orang mahasiswa sebagai sampel
        $ani = Mahasiswa::create(
            array(
                'nama' => 'Ani',
                'nim' => 'D015015072',
                'id_dosen' => $dosen->id,
            )
        );

        $budi = Mahasiswa::create(
            array(
                'nama' => 'Budi',
                'nim' => 'D015015088',
                'id_dosen' => $dosen->id,
            )
        );

        $nia = Mahasiswa::create(
            array(
                'nama' => 'Nia',
                'nim' => 'D015015078',
                'id_dosen' => $dosen->id,
            )
        );

        # Informasi ketika mahasiswa telah diisi. 
        $this->command->info('Mahasiswa telah diisi!');

        // Disini kita akan menggunakan ketiga variabel yang kita 
        // deklarasikan diatas yaitu '$ani', '$budi', '$nia'
        // dengan cara mengambil id dari masing-masing variabel yang 
        // baru saja di isi.

        # Ciptakan wali si $ani 
        Wali::create(
            array(
                'nama' => 'Henny A',
                'id_mahasiswa' => $ani->id,
            )
        );

        # Ciptakan wali si $budi
        Wali::create(
            array(
                'nama' => 'Andi S',
                'id_mahasiswa' => $budi->id,
            )
        );

        # Ciptakan wali si $nia
        Wali::create(
            array(
                'nama' => 'Viki D',
                'id_mahasiswa' => $nia->id,
            )
        );

        # Informasi ketika semua wali telah diisi.
        $this->command->info('Data mahasiswa dan wali telah diisi!');
        
        # SIAPKAN SEEDER HOBI DISINI 
        DB::table('hobis')->delete(); 
        DB::table('mahasiswa_hobi')->delete();

        # Isi tabel hobi
        $menulis = Hobi::create(array('hobi' => 'Menulis')); 
        $baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));
        
        # Hubungkan Mahasiswa dengan Hobinya masing-masing 
        $ani->hobi()->attach($menulis->id); 
        $budi->hobi()->attach($baca_buku->id); 
        $nia->hobi()->attach($menulis->id);
                
    }
}
