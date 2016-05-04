@extends('layouts.cliente')

@section('conteudo')
<h2>Pedidos - {{$tipoVisao}} - {{$pedidos->count()}} </h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Data</th>
            <th class="text-right">Valor</th>
            <th class="text-right">Método de Pagamento</th>
            <th class="text-right">Status no Pagseguro</th>
            <th class="text-right">Id no Pagseguro</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pedidos as $pedido)

        <tr>
            <td>
                {{$pedido->data_venda->format('d/m/Y H:i')}}
            </td>
            <td>
                {{number_format($pedido->valor_venda, 2, ',', '.')}}
            </td>
            <td class="text-right">
                {{$pedido->metodo_pagamento}}
            </td>
            <td class="text-right">
                {{$pedido->status_pagamento}}
            </td>
            <td class="text-right">
                {{$pedido->pagseguro_transaction_id}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop