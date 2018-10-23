<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleCategoria extends Migration
{
    
    public function up()
    {
        Schema::create('detalle_categoria', function (Blueprint $table) {
            $table->increments('id_det_cat');
            $table->string('nom_det_cat',100);
            $table->rememberToken();
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::drop('detalle_categoria');
    }
}
