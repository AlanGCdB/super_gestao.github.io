@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar - Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">

            <div class="form-fornecedor">
                <form action="{{ route('produto.store') }}" method="post">
                    @csrf
                    <input type="text" name="nome" id="nome" class="borda-preta" placeholder="Nome:">

                    <input type="text" name="descricao" id="descricao" class="borda-preta" placeholder="Descrição:">

                    <input type="text" name="peso" id="peso" class="borda-preta" placeholder="Peso:">

                    <select name="unidade_id" id="unidade_id">

                        <option>-- Selecione a Unidade de Medida --</option>
                        @foreach ($unidades as $unidade)
                            <option value="{{ $unidade->id }}">{{ $unidade->descricao }}</option>
                        @endforeach

                    </select>

                    <button type="submit" class="borda-preta">Cadastra</button>

                </form>
            </div>
        </div>

    </div>

@endsection
