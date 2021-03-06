<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transparencia extends Model
{
    protected $fillable = [
        
        'id_rec_arrec_detalhe',
        'ano_exercicio',
        'ds_municipio',
        'ds_orgao',
        'mes_referencia',
        'mes_ref_extenso',
        'ds_poder',
        'ds_fonte_recurso',
        'ds_cd_aplicacao_fixo',
        'ds_cd_aplicacao_variavel',
        'ds_categoria',
        'ds_subcategoria',
        'ds_fonte',
        'ds_rubrica',
        'ds_alinea',
        'ds_subalinea',
        'vl_arrecadacao'
    ];
}
