@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor - Adicionar</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a></li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div class="msg-valido">
                <h1>
                    {{ $msg ?? '' }}
                </h1>
            </div>
            <div class="form-fornecedor">
                <form action="{{ route('app.fornecedor.adicionar') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">

                    <input type="text" name="nome" id="nome" value="{{ $fornecedor->nome ?? old('nome') }}"
                        class="borda-preta" placeholder="Nome:">

                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

                    <input type="text" name="site" id="site" value="{{ $fornecedor->site ?? old('site') }}"
                        class="borda-preta" placeholder="Site:">

                    {{ $errors->has('site') ? $errors->first('site') : '' }}


                    <input type="text" name="uf" id="uf" value="{{ $fornecedor->uf ?? old('uf') }}"
                        class="borda-preta" placeholder="Estado:">

                    {{ $errors->has('uf') ? $errors->first('uf') : '' }}


                    <input type="email" name="email" id="email" value="{{ $fornecedor->email ?? old('email') }}"
                        class="borda-preta" placeholder="E-mail:">

                    {{ $errors->has('email') ? $errors->first('email') : '' }}


                    <button type="submit" class="borda-preta">Cadastra</button>

                </form>
            </div>
        </div>

    </div>

@endsection
