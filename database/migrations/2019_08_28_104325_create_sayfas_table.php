<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSayfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sayfas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('name');           
            $table->string('link');
            $table->string('baslik');
            $table->text('aciklama');
            $table->string('anahtar_kelime');
            $table->text('icerik');
            $table->integer('gosterim')->default(0);
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
        Schema::dropIfExists('sayfas');
    }
}
