<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_olahraga extends Model
{
    use HasFactory;
    
    // Menentukan nama tabel yang terhubung dengan model ini
    protected $table = 'kategori_olahraga';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',  // Nama kategori olahraga
    ];

    // Definisi relasi "has many" dengan model olahraga
    public function olahraga()
    {
        return $this->hasMany(Olahraga::class);
    }
}
