<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir', 60);
            $table->string('email');
            $table->string('no_telp', 100);
            $table->string('agama', 100);
            $table->string('warganegara', 100);
            $table->string('npwp', 50);
            $table->string('no_ktp', 60);
            $table->text('alamat_ktp');
            $table->text('alamat_tinggal');
            $table->string('status_marital', 100);
            $table->string('jenis_kelamin', 50);
            $table->string('sakit');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('nama_saudara');
            $table->string('anak_ke', 50);
            $table->string('nama_pt');
            $table->string('jabatan');
            $table->string('masa_kerja', 50);
            $table->string('gaji_terakhir');
            $table->string('nama_atasan');
            $table->text('alamat_pt');
            $table->text('alasan_berhenti_kerja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamar');
    }
}
