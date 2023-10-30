@extends('app.layouts.basico')

@section('titulo', 'Cliente')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de Clientes</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create') }}">Novo</a></li>
                <li><a>Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div class="form-fornecedor">

                <table>
                    <thead>
                        <tr>
                            <th>Nome:</th>


                            <th class="null"></th>
                            <th class="null"></th>
                            <th class="null"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>



                                <td><a href="{{ route('cliente.show', ['cliente' => $cliente->id]) }}">Visualizar</a></td>
                                <td>
                                    <form id="from_{{ $cliente->id }}"
                                        action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('from_{{ $cliente->id }}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}">Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $clientes->appends($request)->links() }}
                <br>
                <p>Exibindo {{ $clientes->count() }} clientes de {{ $clientes->total() }} (de
                    {{ $clientes->firstItem() }} a {{ $clientes->lastItem() }} ) </p>
            </div>
        </div>

    </div>

@endsection
