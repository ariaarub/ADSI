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
        Schema::create('content', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('administrator_id');

            /* $table->foreign('administrator_id')->references('id')->on('administrator'); */
            $table->string('nama_konten');
            $table->string('isi_konten');
            $table->timestamp('tanggal_konten');
            $table->binary('gambar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
};
