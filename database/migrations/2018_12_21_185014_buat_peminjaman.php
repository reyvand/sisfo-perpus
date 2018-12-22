<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pinjam', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('buku_kode');
            $table->integer('pinjam_lama');
            $table->date('pinjam_tgl');
            $table->date('pinjam_tgl_kembali');
            $table->integer('pinjam_status');
            $table->integer('denda');
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
        Schema::dropIfExists('tb_pinjam');
    }
}
