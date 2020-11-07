<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanantiketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanantiket', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->char('nomortelepon')->nullable();
            $table->string('alamat')->nullable();
            $table->date('tanggalpembelian')->nullable();
            $table->integer('jumlahtiket')->nullable();
            $table->integer('totalharga')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanantiket');
    }
}
