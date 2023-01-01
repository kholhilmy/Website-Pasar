<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatIuran extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tenant() {
        return $this->hasOne(Tenant::class, 'id', 'tenant_id');
    }


}
