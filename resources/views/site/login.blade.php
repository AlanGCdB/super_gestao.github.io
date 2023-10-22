@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div id="form_login">
                <form action="{{ route('site.login') }}" method="post">
                    @csrf
                    <input type="text" value="{{ old('usuario') }}" name="usuario" id="usuario" class="borda-preta"
                        placeholder="Usuário">
                    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
                    <input type="password" value="{{ old('senha') }}" name="senha" id="senha" class="borda-preta"
                        placeholder="Senha">
                    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
                    <button type="submit" class="borda-preta">Acessar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}" alt="facebook">
            <img src="{{ asset('img/linkedin.png') }}" alt="linkedin">
            <img src="{{ asset('img/youtube.png') }}" alt="youtube">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}" alt="mapa">
        </div>
    </div>
@endsection
