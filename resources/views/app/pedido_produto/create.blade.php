@extends('app.layouts.basico')

@section('titulo', 'Pedido Produto')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar - Produto ao Pedido</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>
        <div class="informacao-pagina">
            <h4>Detalhes do Pedido</h4>
            <p>ID do pedido: {{ $pedido->id }}</p>
            <p>Cliente: {{ $pedido->cliente_id }}</p>
        </div>

        <div class="informacao-pagina">

            <h4>Itens do pedido</h4>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID::</th>
                        <th>Produto:</th>
                        <th>Data de inclusão:</th>
                    </tr>
                </thead>

                <tbody class="tbody-list">
                    @foreach ($pedido->produtos as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->pivot->created_at->format('d/m/Y') }}</td>
                            <td>
                                <form
                                    action="{{ route('pedido-produto.destroy', ['pedidoProduto' => $produto->pivot->id, 'pedido_id' => $pedido->id]) }}"
                                    method="post" id="form_{{ $produto->pivot->id }}">
                                    @csrf
                                    @method('DELETE')

                                    <a href="#"
                                        onclick="getElementById('form_{{ $produto->pivot->id }}').submit()">Excluir</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>

            @component('app.pedido_produto._components.form_create', [
                'pedido' => $pedido,
                'produtos' => $produtos,
            ])
            @endcomponent
        </div>

    </div>

@endsection
