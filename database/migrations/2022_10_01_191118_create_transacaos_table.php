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

            $table->integer('id_empresa', 11);
            $table->integer('id_posto_coleta', 11);
            $table->integer('id_residuo', 11);
            $table->string('uc_cliente', 25);
            $table->char('tipo', 1);
            $table->decimal('quantidade', $precision = 10, $scale = 2);
            $table->decimal('quantidade_massa', $precision = 10,$scale = 2);
            $table->decimal('valor_co2', $precision = 10, $scale = 2);
            $table->decimal('valor_energetico', $precision = 10, $scale = 2);
            $table->string('agrupamento', 32);
            $table->string('maquina', 8);
            $table->integer('id_faturamento_c', 11);
            $table->integer('id_faturamento_d', 11);
            $table->tinyInteger('associado', 1);
            $table->datetime('datetime_processamento');
            $table->timestamp('registro');
            $table->integer('status_faturamento', 1)->nullable();
            $table->integer('flag_offline', 1)->nullable();
            $table->datetime('data_associado');
            $table->datetime('update_at');
            $table->integer('id_usuario', 11)->nullable();

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
