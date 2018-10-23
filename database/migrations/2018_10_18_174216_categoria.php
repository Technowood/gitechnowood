<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categoria extends Migration
{

    public function up()
    {
        Schema::create('categoria', function (Blueprint $table) {
            $table->increments('id_cat');
            $table->string('nom_cat',100);
            $table->integer('id_det_cat')->unsigned();
            $table->foreign('id_det_cat')->references('id_det_cat')->on('detalle_categoria');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('categoria');
    }
}
