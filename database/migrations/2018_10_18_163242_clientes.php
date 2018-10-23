<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clientes extends Migration
{
   
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('idcli');
            $table->string('rasocli',250);
            $table->string('fiscalcli',15);
            $table->string('rfccli',12);
            $table->string('callecli',100);
            $table->string('colocli',100);
            $table->string('municli',100);
            $table->string('estacli',100);
            $table->integer('cpcli');
            $table->string('correocli',40);
            $table->integer('telcli');
            $table->string('passcli',100);

            

            $table->rememberToken();
            $table->timestamps();
});
    }

   
    public function down()
    {
        Schema::drop('clientes');
    }
}
