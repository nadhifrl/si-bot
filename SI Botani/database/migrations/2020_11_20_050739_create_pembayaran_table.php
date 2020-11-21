<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('bank')->nullable();
            $table->string('namarekeningpengirim')->nullable();
            $table->char('nomorrekening')->nullable();
            $table->text('gambar')->nullable();
            $table->enum('status', ['Proses', 'Pembayaran Tidak Disetujui', 'Pembayaran Disetujui']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
