<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTransparencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transparencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_rec_arrec_detalhe');
            $table->string('ano_exercicio');
            $table->string('ds_municipio');
            $table->string('ds_orgao');
            $table->string('mes_referencia');
            $table->string('mes_ref_extenso');
            $table->string('ds_poder');
            $table->string('ds_fonte_recurso');
            $table->string('ds_cd_aplicacao_fixo');
            $table->string('ds_cd_aplicacao_variavel');
            $table->string('ds_categoria');
            $table->string('ds_subcategoria');
            $table->string('ds_rubrica');
            $table->string('ds_alinea');
            $table->string('ds_subalinea');
            $table->string('vl_arrecadacao');
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
        Schema::dropIfExists('transparencia');
    }
}
