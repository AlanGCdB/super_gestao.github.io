@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Visualizar - Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <div class="visualizar-produtos">
                <table border="1">
                    <tr>
                        <th>ID:</th>
                        <td>{{ $produto->id }}</td>
                    </tr>
                    <tr>
                        <th>Nome:</th>
                        <td>{{ $produto->nome }}</td>
                    </tr>
                    <tr>
                        <th>Descrição:</th>
                        <td>{{ $produto->descricao }}</td>
                    </tr>
                    <tr>
                        <th>Peso:</th>
                        <td>{{ $produto->peso }}- kg </td>
                    </tr>
                    <tr>
                        <th>Unidade de medidas:</th>
                        <td>{{ $produto->unidade_id }}</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

@endsection
