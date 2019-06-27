<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotasTable extends Migration
{

    public function up()
    {

      Schema::create('notas', function(Blueprint $table){
        $table->bigIncrements('id');
        $table->string('titulo');
        $table->string('epigrafe',25);
        $table->text('cuerpo');
        $table->string('entrada', 250);
        $table->string('img', 200)->nullable();
        $table->timestamps();



      });



    }

  
    public function down()
    {
      Schema::dropIfExists('notas');

    }
}
