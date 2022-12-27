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
        Schema::create('file', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_merek')->unsigned();
            $table->string('nama');
            $table->bigInteger('id_mesin')->unsigned();
            $table->bigInteger('id_plat')->unsigned();
            $table->string('namaFile');
            $table->timestamps();

            $table->foreign('id_merek')->references('id')->on('merek');
            $table->foreign('id_plat')->references('id')->on('plat_nomors');
            $table->foreign('id_mesin')->references('id')->on('mesin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file');
    }
};
