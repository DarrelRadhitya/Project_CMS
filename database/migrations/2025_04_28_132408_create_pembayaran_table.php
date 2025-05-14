<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_transaksi');
            $table->string('jumlah_bayar');
            $table->enum('metode_pembayaran', ['cash', 'transfer']);
            $table->date('tanggal_pembayaran');
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id')->on('transaksis')->onDelete('cascade');
        });
    }      

    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};