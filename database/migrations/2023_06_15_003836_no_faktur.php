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
        Schema::create('no_faktur', function (Blueprint $table) {
            $table->integer('ID',11)->autoIncrement();
            $table->string('FG_PENGGANTI',20)->nullable();
            $table->integer('JUMLAH_DPP')->default('0');
            $table->integer('JUMLAH_PPN')->default('0');
            $table->integer('JUMLAH_PPN_BM')->default('0');
            $table->string('KD_JENIS_TRANSAKSI',20)->nullable();
            $table->integer('MASA_PAJAK')->nullable();
            $table->string('NAMA_PEMBELI',200);
            $table->string('NAMA_PENJUAL',200);
            $table->string('NOMOR_FAKTUR',50);
            $table->string('NPWP_PEMBELI',50);
            $table->string('NPWP_PENJUAL',50);
            $table->integer('TAHUN_PAJAK')->nullable();
            $table->date('TANGGAL_FAKTUR');
            $table->string('EXISTED',45)->nullable();
            $table->string('USED_FLAG',45)->default('N');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
