<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productos extends Migration
{

    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('idpro');
            $table->string('nompro',250);
            $table->string('modpro',100);
            $table->string('caractpro',500);
            $table->integer('preciopro');
            $table->integer('id_cat')->unsigned();
            $table->foreign('id_cat')->references('id_cat')->on('categoria');
            $table->integer('id_det_cat')->unsigned();
            $table->foreign('id_det_cat')->references('id_det_cat')->on('detalle_categoria');
            
        
            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('productos');
    }
}
