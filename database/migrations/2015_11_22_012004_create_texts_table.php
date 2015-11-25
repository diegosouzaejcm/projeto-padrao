<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextsTable extends Migration
{
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('conteudo');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('texts');
    }
}
