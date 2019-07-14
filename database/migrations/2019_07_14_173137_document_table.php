<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentTable extends Migration
{

    public function up()
    {
    Schema::create('document',function(Blueprint $table ){
      $table ->bigIncrements('id');
      $table->text('documento');
      $table->text('texto');
      $table->text('titulo');
      $table->string('img', 200);
        $table->timestamps();
    });
  }

    public function down()
    {
      Schema::dropIfExists('document');

    }
  }
