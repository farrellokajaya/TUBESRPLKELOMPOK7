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
        Schema::create('perpanjangsim', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama_pengguna');
            $table->string('alamat');
            $table->string('jenis_sim');
            $table->string('sim_lama');
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
        Schema::dropIfExists('perpanjangsim');
    }
};
