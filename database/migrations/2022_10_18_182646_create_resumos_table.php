<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumos', function (Blueprint $table) {
            $table->id();
            
            $table->BigInteger('id_projeto')->unsigned();
            $table->foreign('id_projeto')->references('id')->on('projetos');
            $table->float('kg');
            $table->integer('clientes');
            $table->float('bonus');
            $table->float('economizado');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumos');
    }
};
