<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Mahasiswa;
use App\Models\Wali;
use Illuminate\Support\Facades\DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        /***********************************
         *** SEEDER DOSEN UNTUK RELASI SELANJUTNYA ***
         ***********************************/

        // Kita akan membuat 3 orang mahasiswa sebagai sampel
        $ani = Mahasiswa::create(
            array(
                'nama' => 'Ani',
                'nim' => 'D015015072'
            )
        );

        $budi = Mahasiswa::create(
            array(
                'nama' => 'Budi',
                'nim' => 'D015015088'
            )
        );

        $nia = Mahasiswa::create(
            array(
                'nama' => 'Nia',
                'nim' => 'D015015078'
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
        
        /***********************************
         *** SEEDER HOBI UNTUK RELASI SELANJUTNYA ***
         ***********************************/

        //
        
    }
}
