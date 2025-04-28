<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaystationTable extends Migration
{
    public function up()
    {
        Schema::create('playstation', function (Blueprint $table) {
            $table->string('id_playstation', 100)->primary();
            $table->string('jenis', 50);
            $table->integer('harga_sewa');
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('playstation');
    }
}
