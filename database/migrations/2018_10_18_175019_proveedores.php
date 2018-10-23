<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedores extends Migration
{
   
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('idprove');
            $table->string('nomprove',250);
            $table->integer('telcli');
            $table->string('contraprove',15);
            $table->string('rfccli',12);
            $table->string('calleprove',100);
            $table->integer('nointprove');
            $table->integer('noextprove');
            $table->string('colprove',100);
            $table->string('muniprove',100);
            $table->string('estaprove',100);
            $table->integer('cpprove');
            $table->string('correoprove',40);
            $table->integer('idpro')->unsigned();
            $table->foreign('idpro')->references('idpro')->on('productos');
        
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('proveedores');
    }
}
