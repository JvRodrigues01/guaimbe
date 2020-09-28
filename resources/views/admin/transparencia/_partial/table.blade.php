<div class="page-subtitle">
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Transparencia</h3>
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id_rec_arrec_detalhe</th>
                    <th>ano_exercicio</th>
                    <th>ds_municipiol</th>
                    <th>ds_orgao</th>
                    <th>mes_referencia</th>
                    <th>mes_ref_extenso</th>
                    <th>ds_poder</th>
                    <th>ds_fonte_recurso</th>
                    <th>ds_cd_aplicacao_fixo</th>
                    <th>ds_cd_aplicacao_variavel</th>
                    <th>ds_categoria</th>
                    <th>ds_subcategoria</th>
                    <th>ds_fonte</th>
                    <th>ds_rubrica</th>
                    <th>ds_alinea</th>
                    <th>ds_subalinea</th>
                    <th>vl_arrecadacao</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transparencias as $transparencia)

                    <td>{{$transparencia->id}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                @endforeach
            </tbody>
        </table>
    </div>                                  
</div>



