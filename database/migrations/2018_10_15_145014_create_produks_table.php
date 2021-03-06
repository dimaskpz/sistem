<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('acara_id');
            $table->foreign('acara_id')->references('id')->on('acaras')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',255)->nullable();
            $table->Integer('harga')->default(0);
            $table->Integer('jumlah')->nullable();
            $table->string('deskripsi')->nullable();
            $table->date('tgl_selesai')->nullable();

            $table->string('komisi_jenis')->default('tetap');
            $table->Integer('komisi_tetap')->default(0);
            $table->Integer('komisi_persen')->default(0);

            // $table->date('tgl_mulai')->nullable();
            $table->timestamps();
        });
    }

    // $table->unsignedInteger('mkaryawan_id')->nullable();
    // $table->foreign('mkaryawan_id')->references('id')->on('mkaryawans')->onUpdate('cascade')->onDelete('cascade');
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
