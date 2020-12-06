<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('anasayfa_baslik');
            $table->string('email');
            $table->string('telefon');
            $table->string('baslik');
            $table->timestamps();
        });
        DB::table('headers')->insert([
            ['anasayfa_baslik' => 'The ADAM', 'email' => 'info@theadam.com.tr','telefon'=>'+90 (212) 968 23 26','baslik'=>'Bir sorunuz mu var?']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headers');
    }
}
