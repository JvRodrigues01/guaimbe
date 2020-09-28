<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Transparencia;
use Excel;

class TransparenciaController extends Controller
{
    
    private $transparenciaModel;
   
 
    public function __construct(Transparencia $transparenciaModel)
    {
        $this->transparenciaModel = $transparenciaModel;
    }

    /**
     * @return mixed
     */
    public function index(Request $request)
    {   
        $transparencias = $this->transparenciaModel->first();
        return view('admin.transparencia.index',compact('transparencias'));
    }

    public function create()
    {

    }

    public function import(Request $request) {
        Excel::load($request->excel, function($reader) {
            $results = $reader->all();

            foreach($results as $r){
                $transparencia = new Transparencia();
                $transparencia->id_rec_arrec_detalhe = $r->id_rec_arrec_detalhe;
                $transparencia->ano_exercicio = $r->ano_exercicio;
                $transparencia->ds_municipio = $r->ds_municipio;
                $transparencia->ds_orgao = $r->ds_orgao;
                $transparencia->mes_referencia = $r->mes_referencia;
                $transparencia->mes_ref_extenso =  $r->mes_ref_extenso;
                $transparencia->ds_poder = $r->ds_poder;
                $transparencia->ds_fonte_recurso = $r->ds_fonte_recurso;
                $transparencia->ds_cd_aplicacao_fixo = $r->ds_cd_aplicacao_fixo;
                $transparencia->ds_cd_aplicacao_variavel = $r->ds_cd_aplicacao_variavel;
                $transparencia->ds_categoria = $r->ds_categoria;
                $transparencia->ds_subcategoria = $r->ds_subcategoria;
                $transparencia->ds_rubrica = $r->ds_rubrica;
                $transparencia->ds_alinea = $r->ds_alinea;
                $transparencia->ds_subalinea = $r->ds_subalinea;
                $transparencia->vl_arrecadacao = $r->vl_arrecadacao;
                $transparencia->save();
            
            }
        }); 
        
        $request->session()->flash('class', 'alert alert-success alert-dismissible');
        $request->session()->flash('msg', "Importação concluída!");
        
        
        return $transparencia;
        
    }

}
