<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('buku_kode',6)->unique();
            $table->string('buku_judul',60);
            $table->string('buku_pengarang',40);
            $table->string('buku_kategori',20);
            $table->integer('buku_stok');
            $table->integer('penerbit_id');
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
        Schema::dropIfExists('tb_buku');
    }
}
