<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ventas extends Migration
{
    
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('idventa');
            $table->date('fecha_venta');
            $table->integer('no_factura');
            $table->integer('idcli')->unsigned();
            $table->foreign('idcli')->references('idcli')->on('clientes');
            $table->integer('idpro')->unsigned();
            $table->foreign('idpro')->references('idpro')->on('productos');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('ventas');
    }
}
