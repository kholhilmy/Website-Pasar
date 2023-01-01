<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pasar',
        'alamat',
        'created_by',
        'edited_by'
    ];

    public function pengelola() {
        return $this->hasOne(Pengelola::class, 'pasar_id', 'id');
    }

    public function tenant() {
        return $this->hasMany(Tenant::class, 'pasar_id', 'id');
    }
}
