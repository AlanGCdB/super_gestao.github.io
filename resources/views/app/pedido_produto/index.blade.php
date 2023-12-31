@extends('app.layouts.basico')

@section('titulo', 'Pedido')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de Pedido</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.create') }}">Novo</a></li>
                <li><a>Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div class="form-fornecedor">

                <table>
                    <thead>
                        <tr>
                            <th>ID Pedido:</th>
                            <th>Cliente:</th>
                            <th class="null"></th>
                            <th class="null"></th>
                            <th class="null"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidos as $pedido)
                            <tr>
                                <td>{{ $pedido->id }}</td>
                                <td>{{ $pedido->cliente_id }}</td>
                                <td><a href="{{ route('pedido-produto.create', ['pedido' => $pedido->id]) }}">Adicionar
                                        produtos</a></td>
                                <td><a href="{{ route('pedido.show', ['pedido' => $pedido->id]) }}">Visualizar</a></td>
                                <td>
                                    <form id="from_{{ $pedido->id }}"
                                        action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('from_{{ $pedido->id }}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('pedido.edit', ['pedido' => $pedido->id]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pedidos->appends($request)->links() }}
                <br>
                <p>Exibindo {{ $pedidos->count() }} pedidos de {{ $pedidos->total() }} (de
                    {{ $pedidos->firstItem() }} a {{ $pedidos->lastItem() }} ) </p>
            </div>
        </div>

    </div>

@endsection
