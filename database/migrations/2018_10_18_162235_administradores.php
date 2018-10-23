<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Administradores extends Migration
{
    
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->increments('idadmin');
            $table->string('nomadmin',40);
            $table->string('apepadmin',40);
            $table->string('apemadmin',40);
            $table->string('sexo',1);
            $table->string('puestoadmin',40);
            $table->string('activo',2);
            

            $table->rememberToken();
            $table->timestamps();
});
    }

    
    public function down()
    {
        Schema::drop('administradores');
    }
}
