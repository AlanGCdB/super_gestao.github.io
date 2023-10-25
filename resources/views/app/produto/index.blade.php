@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de</p>
        </div>

        <div class="menu">
            <ul>
                <li><a>Novo</a></li>
                <li><a>Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div class="form-fornecedor">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Nome:</th>
                            <th>Descrição:</th>
                            <th>Peso:</th>
                            <th>Unidade ID:</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>

                                <td><a>Excluir</a></td>
                                <td><a>Editar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $produtos->appends($request)->links() }}
                <br>
                <p>Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de
                    {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }} ) </p>
            </div>
        </div>

    </div>

@endsection
