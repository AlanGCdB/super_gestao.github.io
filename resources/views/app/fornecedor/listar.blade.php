@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Listar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div class="fornecedor-listar">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Nome:</th>
                            <th>Site:</th>
                            <th>Estado:</th>
                            <th>E-mail:</th>
                        </tr>
                    </thead>
                    @foreach ($fornecedores as $fornecedor)
                        <tbody class="tbody-list">
                            <tr>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->site }}</td>
                                <td>{{ $fornecedor->uf }}</td>
                                <td>{{ $fornecedor->email }}</td>

                                <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a></td>

                                <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    <p>Lista de produtos</p>
                                    <table class="tb-fornecedor">
                                        <thead>
                                            <tr>
                                                <th>ID:</th>
                                                <th>Nome:</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($fornecedor->produtos as $key => $produto)
                                                <tr>
                                                    <td>{{ $produto->id }} </td>
                                                    <td>{{ $produto->nome }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                {{ $fornecedores->appends($request)->links() }}
                <br>
                <p>Exibindo {{ $fornecedores->count() }} fornecedores de {{ $fornecedores->total() }} (de
                    {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }} ) </p>
            </div>
        </div>

    </div>

@endsection
