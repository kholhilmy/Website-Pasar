<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKepemilikan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tenant() {
        return $this->hasOne(Tenant::class, 'id', 'tenant_id');
    }

    public function pemilikLama() {
        return $this->hasOne(Pemilik::class, 'id', 'pemilik_id_lama');
    }

    public function pemilikBaru() {
        return $this->hasOne(Pemilik::class, 'id', 'pemilik_id_baru');
    }


}
