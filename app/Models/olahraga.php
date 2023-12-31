<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class olahraga extends Model
{
    use HasFactory;
    use HasFactory;

    // Menentukan nama tabel yang terhubung dengan model ini
    protected $table = 'olahraga';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'kode',             // Kode olahraga
        'nama',             // Nama olahraga
        'harga_jual',       // Harga jual olahraga
        'harga_beli',       // Harga beli olahraga
        'tiket',             // Jumlah tiket olahraga
        'min_stok',         // Jumlah minimal stok olahraga
        'deskripsi',        // Deskripsi olahraga
        'kategori_olahraga_id',// ID kategori olahraga
    ];

    // Definisi relasi "belongs to" dengan model Kategoriolahraga
    public function kategori_olahraga()
    {
        return $this->belongsTo(kategori_olahraga::class);
    }
}
