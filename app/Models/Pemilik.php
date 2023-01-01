<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'nama',
    //     'alamat',
    //     'nik',
    //     'no_wa',
    //     'no_telp',
    //     'created_by'
    // ];
    public function tenant() { //menghubungkan model Tenant dengan model Pasar
        return $this->hasMany(Tenant::class); //mengembalikan relasi dari model Tenant terhadap model Pasar [dalam case ini, 1 tenant punya 1 pasar. jadi pake belongsTo(Pasar)]
    }
}
