<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compras extends Migration
{
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('idcompra');
            $table->date('fecha_compra');
            $table->integer('no_factura');
            $table->integer('idprove')->unsigned();
            $table->foreign('idprove')->references('idprove')->on('proveedores');
            $table->integer('idpro')->unsigned();
            $table->foreign('idpro')->references('idpro')->on('productos');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::drop('compras');
    }
}
