<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleVentas extends Migration
{
  
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->increments('id_det_venta');
            $table->integer('cantidad_venta');
            $table->integer('idventa')->unsigned();
            $table->foreign('idventa')->references('idventa')->on('ventas');
            $table->integer('total_venta');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('detalle_ventas');
    }
}
