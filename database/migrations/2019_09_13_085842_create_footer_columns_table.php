<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_columns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('baslik')->nullable();
            $table->string('image')->nullable();
            $table->string('aciklama')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('linkedin')->nullable();
            $table->integer('gorunum')->default(1);
            $table->timestamps();
        });
        DB::table('footer_columns')->insert([
            ['baslik' => 'birinci sütun baslik', 'image' => '','aciklama'=>'birinci sütun aciklama',],
            ['baslik' => 'ikinci sütun baslik', 'image' => '','aciklama'=>'ikinci sütun aciklama'],
            ['facebook'=>'https://www.facebook.com/theadamcomtr','twitter'=>'https://twitter.com/login?lang=tr','instagram'=>'https://www.instagram.com/theadamcomtr/','pinterest'=>'https://tr.pinterest.com/','linkedin'=>'https://www.linkedin.com/company/theadamcomtr'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer_columns');
    }
}
