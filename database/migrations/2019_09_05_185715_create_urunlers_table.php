<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrunlersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urunlers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('urunkategoriid');
            $table->string('name');
            $table->string('link');
            $table->string('image');
            $table->string('baslik');
            $table->double('fiyat');
            $table->text('aciklama');
            $table->text('icerik');
            $table->string('anahtar_kelime');
            $table->integer('gorunum')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('urunlers');
    }
}
