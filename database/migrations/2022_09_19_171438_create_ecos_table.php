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
        Schema::create('ecos', function (Blueprint $table) {
            $table->id();
            $table->string('nomeposto', 240);
            $table->integer('beneficiado', 10)->default(0);
            $table->float('bonus', 30)->default(0);
            $table->float('coletado', 30)->default(0);
            $table->float('economizado', 30)->default(0);
            $table->float('massa', 45)->default(0);
            $table->integer('unidade', 10)->default(0);
            $table->float('litro', 30)->default(0);
            $table->float('residometro', 10,2)->default(0.00);
            $table->dateTime('att_dia', );
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
        Schema::dropIfExists('ecos');
    }
};
