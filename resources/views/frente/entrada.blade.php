@extends('layouts.frente-loja')

@section('conteudo')
<div class='col-sm-12'>
    <div class="page-header text-muted">
        {{count($produtos)}} produtos em destaque
    </div>
</div>
@foreach($produtos as $produto)
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjg3IiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDY4NyAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUzNjJkY2MyOWUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZTozNHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTM2MmRjYzI5ZSI+PHJlY3Qgd2lkdGg9IjY4NyIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIyNTUuMjQxNjY4NzAxMTcxODgiIHk9IjExNS42Ij42ODd4MjAwPC90ZXh0PjwvZz48L2c+PC9zdmc+" style="height: 200px; width: 100%; display: block;" data-src="holder.js/100%x200" alt="100%x200">
        <div class="caption">
            <h3>{{$produto->nome}}</h3>
            <p>{{str_limit($produto->descricao,100)}}</p>
            <p><a href="{{route('produto.detalhes', $produto->id)}}" class="btn btn-primary" role="button">Detalhes</a></p>
        </div>
    </div>
</div>
@endforeach
@stop