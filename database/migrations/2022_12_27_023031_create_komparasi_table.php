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
        Schema::create('komparasi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('merk1')->unsigned();
            $table->string('mobil1');
            $table->bigInteger('kode_plat1')->unsigned();
            $table->bigInteger('merk2')->unsigned();
            $table->string('mobil2');
            $table->bigInteger('kode_plat2')->unsigned();
            $table->bigInteger('merk3')->nullable()->unsigned();
            $table->string('mobil3')->nullable();
            $table->bigInteger('kode_plat3')->nullable()->unsigned();
            $table->bigInteger('merk4')->nullable()->unsigned();
            $table->string('mobil4')->nullable();
            $table->bigInteger('kode_plat4')->nullable()->unsigned();
            $table->string('namaFile');
            $table->timestamps();

            $table->foreign('merk1')->references('id')->on('merek');
            $table->foreign('merk2')->references('id')->on('merek');
            $table->foreign('merk3')->references('id')->on('merek');
            $table->foreign('merk4')->references('id')->on('merek');

            $table->foreign('kode_plat1')->references('id')->on('plat_nomors');
            $table->foreign('kode_plat2')->references('id')->on('plat_nomors');
            $table->foreign('kode_plat3')->references('id')->on('plat_nomors');
            $table->foreign('kode_plat4')->references('id')->on('plat_nomors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komparasi');
    }
};
