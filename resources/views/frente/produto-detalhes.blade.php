@extends('layouts.frente-loja')

@section('conteudo')
<div class='col-sm-12'>
    <h2 class="page-header text-info">
        {{$produto->nome}}
    </h2>
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="thumbnail">
            <img src="{{route('imagem.file',$produto->imagem_nome)}}" alt="{{$produto->imagem_nome}}">
            <h4 class="text-muted">&copy; {{$produto->marca->nome}}</h4>
            <h5 class="text-muted">categoria >> {{$produto->categoria->nome}}</h5>
        </div>
    </div>
    <div class="col-sm-3">
        <h2 class="text-center text-info"> R$ {{number_format($produto->preco_venda, 2, ',', '.')}}</h2>
    </div>
    <div class="col-sm-3">
        <h3>Pagamento</h3>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <h3 class="page-header">Descrição detalhada</h3>
        {{$produto->descricao}}
    </div>

</div>
@stop