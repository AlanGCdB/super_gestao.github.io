@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div class="form-fornecedor">
                <form action="{{ route('app.fornecedor.listar') }}" method="post">
                    @csrf
                    <input type="text" name="nome" id="nome" class="borda-preta" placeholder="Nome:">
                    <input type="text" name="site" id="site" class="borda-preta" placeholder="Site:">
                    <input type="text" name="uf" id="uf" class="borda-preta" placeholder="Estado:">
                    <input type="email" name="email" id="email" class="borda-preta" placeholder="E-mail:">
                    <button type="submit" class="borda-preta">Pesquisar</button>

                </form>
            </div>
        </div>

    </div>

@endsection
