<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleCompra extends Migration
{
    
    public function up()
    {
        Schema::create('detalle_compra', function (Blueprint $table) {
            $table->increments('id_det_compra');
            $table->integer('cantidad_comp');
            $table->integer('idcompra')->unsigned();
            $table->foreign('idcompra')->references('idcompra')->on('compras');
            $table->integer('total_compra');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('detalle_compra');
    }
}
