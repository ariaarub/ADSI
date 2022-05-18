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
        Schema::create('services', function (Blueprint $table) {
            $table->integer('montir_id');
            $table->integer('kerusakan_vehicle_id');
            $table->integer('kerusakan_id');
            $table->integer('kerusakan_vehicle_user_id');

            /* $table->foreign('montir_id')->references('id')->on('montir');
            $table->foreign('kerusakan_vehicle_id')->references('vehicle_id')->on('kerusakan');
            $table->foreign('kerusakan_id')->references('id')->on('kerusakan');
            $table->integer('kerusakan_vehicle_user_id'); */
            $table->timestamp('waktu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
