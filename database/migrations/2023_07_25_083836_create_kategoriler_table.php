<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategorilerTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kategoriler', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_adi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('kategoriler');
    }
}