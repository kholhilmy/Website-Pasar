<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_iurans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id');
            $table->date('tahun_bulan');
            $table->unsignedBigInteger('jml_bayar');
            $table->date('tgl_bayar')->nullable();
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat_iurans');
    }
};
