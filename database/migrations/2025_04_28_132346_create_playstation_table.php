<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('playstations', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->decimal('harga_sewa'); 
            $table->enum('status', ['tersedia', 'disewakan']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('playstations');
    }
};
