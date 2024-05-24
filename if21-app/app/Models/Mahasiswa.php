<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['npm', 'nama', 'tempat_lahir', 'alamat'. 'kota_id', 'prodi_id', 'url_foto'];  

    public function prodi() {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }


    public function kota() {
        //return $this->belongsToMany() 
        return $this->belongsTo(Kota::class, 'kota_id'); //satu ke satu
    }
}
