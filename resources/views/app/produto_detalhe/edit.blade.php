@extends('app.layouts.basico')

@section('titulo', 'Detalhes do Produto')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Editar Detalhes do Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <h4>Produto</h4>
            <div>Nome: {{ $produto_detalhe->item->nome }}</div>
            <div>Descrição: {{ $produto_detalhe->item->descricao }}</div>
            <div class="form-fornecedor">
                @component('app.produto_detalhe._components.form_create_edit', [
                    'unidades' => $unidades,
                    'produto_detalhe' => $produto_detalhe,
                ])
                @endcomponent
            </div>
        </div>

    </div>

@endsection
