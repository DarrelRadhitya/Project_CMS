<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->string('id_transaksi', 100)->primary();
            $table->string('id_pelanggan', 100);
            $table->string('id_playstation', 100);
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->string('status', 50);
            $table->string('pembayaran_id_pembayaran', 100)->nullable();
            $table->timestamps();

            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggan')->onDelete('cascade');
            $table->foreign('id_playstation')->references('id_playstation')->on('playstation')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
