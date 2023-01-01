<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengelola extends Model
{
    use HasFactory;
    protected $guarded = ['id']; //data yang tidak boleh di-assign, sedangkan sisanya boleh
    protected $with = ['pasar','user']; //eager loading. with digunakan agar sekalian pasar dan user terambil saat pemanggilan pengelola

    public function pasar() { //menghubungkan model Pengelola dengan model Pasar
        return $this->belongsTo(Pasar::class); //mengembalikan relasi dari model Pengelola terhadap model Pasar [dalam case ini, 1 Pengelola punya 1 pasar. jadi pake belongsTo(Pasar)]
    }

    public function user() { //menghubungkan model Pengelola dengan model Pasar
        return $this->belongsTo(User::class); //mengembalikan relasi dari model Pengelola terhadap model Pasar [dalam case ini, 1 Pengelola punya 1 pasar. jadi pake belongsTo(Pasar)]
    }
}
