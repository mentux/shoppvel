@extends('layouts.frente-loja')

@section('conteudo')
<div class='col-sm-12'>
    <h2 class="page-header text-info">
        {{$produto->nome}}
    </h2>
</div>
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="{{route('imagem.file',$produto->imagem_nome)}}" >
        <div class="caption">
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-6">
    {{$produto->preco_venda}}
</div>
<div class="col-md-4 col-sm-6">
    {{$produto->descricao}}
</div>
@stop