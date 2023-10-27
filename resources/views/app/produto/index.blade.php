@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de Produtos</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.create') }}">Novo</a></li>
                <li><a>Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div class="form-fornecedor">
                <table>
                    <thead>
                        <tr>
                            <th>Nome:</th>
                            <th>Descrição:</th>
                            <th>Peso:</th>
                            <th>Unidade ID:</th>
                            <th>Comprimento:</th>
                            <th>Altura:</th>
                            <th>largura:</th>

                            <th class="null"></th>
                            <th class="null"></th>
                            <th class="null"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->peso }}</td>
                                <td>{{ $produto->unidade_id }}</td>
                                <td>{{ $produto->itemDetalhe->comprimento ?? '' }}</td>
                                <td>{{ $produto->itemDetalhe->altura ?? '' }}</td>
                                <td>{{ $produto->itemDetalhe->largura ?? '' }}</td>



                                <td><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a></td>
                                <td>
                                    <form id="from_{{ $produto->id }}"
                                        action="{{ route('produto.destroy', ['produto' => $produto->id]) }}"
                                        method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('from_{{ $produto->id }}').submit()">Excluir</a>
                                    </form>
                                </td>
                                <td><a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Editar</a></td>
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
