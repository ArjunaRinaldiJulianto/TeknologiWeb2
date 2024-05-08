<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    use HasFactory;
    # Tentukan nama tabel terkait
    //protected $table = 'mahasiswas'; // jika aturan penamaan model dan migration singular dan plural maka code ini tidak perlu digunakan
    
    # MASS ASSIGNMENT
    # Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
    protected $fillable = ['nama', 'nim'];

    /*
     * Relasi One-to-One
     * =================
     * Buat function bernama wali(), dimana model 'Mahasiswa' memiliki relasi One-to-One
     * terhadap model 'Wali' melalui 'id_mahasiswa'
     */
    public function wali()
    {
        return $this->hasOne('App\Models\Wali', 'id_mahasiswa');
    }
}
