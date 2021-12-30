<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->biginteger('jurusan_id')->unsigned();
            //foreign key
            $table->foreign('jurusan_id')
                  ->references('id')
                  ->on('jurusans');
            //tutup
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->biginteger('no_hp');
            $table->string('email')->unique();
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->text('alamat');
            $table->string('foto');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('no_hp_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('no_hp_ibu');
            $table->string('asal_sekolah');
            $table->text('alamat_sekolah');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
