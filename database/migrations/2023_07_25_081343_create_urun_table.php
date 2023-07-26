<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('urunler', function (Blueprint $table) {
        $table->id();
        $table->string('urun_adi');
        $table->text('urun_aciklama');
        $table->integer('urun_fiyat');
        $table->string('urun_resim')->default('/images/default.png');
        $table->text('urun_kategori');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler1');
    }
};
