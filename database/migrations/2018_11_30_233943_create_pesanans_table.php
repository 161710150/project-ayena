<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_produk');
            $table->foreign('id_produk')->references('id')->on('produks')->onupdate('cascade')->ondelete('cascade');
            $table->string('No_Identitas',16);
            $table->string('Nama_Pemesan');
            $table->string('Jenis_Kelamin');
            $table->text('Alamat',100);
            $table->string('No_Hp',12);
            $table->date('Tgl_Sewa');
            $table->date('Tgl_Haruskembali');
            $table->date('Tgl_kembali')->nullable();
            $table->string('Jumlah_Hari');
            $table->string('Telat')->nullable();
            $table->string('Denda')->nullable();
            $table->string('Total_Sewa');
            $table->string('Status');
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
        Schema::dropIfExists('pesanans');
    }
}
