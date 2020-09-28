
@extends('layout')

@section('cabecalho')
@endsection

@include('admin.transparencia._partial.modalImport')

@section('conteudo')
<div class="row">   
    <div class="col-md-12">
        <div class="text-right">
            {!! Form::file("excel", ['class' => 'btn btn-primary']) !!}
            </a>
        </div>
    </div>
</div>
<div class="row">
    @include('admin.transparencia._partial.table')
</div>

@endsection'