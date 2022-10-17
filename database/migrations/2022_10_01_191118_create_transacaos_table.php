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
        Schema::create('transacaos', function (Blueprint $table) {
            $table->id();

            $table->string('empresa', 11);
            $table->string('posto_coleta', 11);
            $table->string('residuo', 11);
            $table->string('uc_cliente', 25);
            $table->char('tipo', 1);
            $table->decimal('quantidade', $precision = 10, $scale = 2);
            $table->decimal('quantidade_massa', $precision = 10,$scale = 2);
            $table->decimal('valor_co2', $precision = 10, $scale = 2);
            $table->decimal('valor_energetico', $precision = 10, $scale = 2);
            $table->string('agrupamento', 32);
            $table->string('maquina', 8);
            $table->string('faturamento_c', 11);
            $table->string('faturamento_d', 11);
            $table->string('associado', 1);
            $table->datetime('datetime_processamento');
            $table->timestamp('registro');
            $table->string('status_faturamento', 1)->nullable();
            $table->string('flag_offline', 1)->nullable();
            $table->datetime('data_associado');
            $table->datetime('update_at');
            $table->bigInteger('id_usuario')->unsigned()->constraint();
            $table->foreign('id_usuario')->references('id')->on('users');

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
        Schema::dropIfExists('transacaos');
    }
};
