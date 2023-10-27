<div class="form-fornecedor">

    @if (isset($produto_detalhe->id))
        <form action="{{ route('produto-detalhe.update', ['produto_detalhe' => $produto_detalhe->id]) }}" method="post">
            @method('PUT')
            @csrf
        @else
            <form action="{{ route('produto-detalhe.store') }}" method="post">
                @csrf
    @endif

    <input type="text" name="produto_id" id="produto_id" class="borda-preta" placeholder="produto_id:"
        value="{{ $produto_detalhe->produto_id ?? old('produto_id') }}">

    {{ $errors->has('produto_id') ? $errors->first('comprimento') : '' }}

    <input type="text" name="comprimento" id="comprimento" class="borda-preta" placeholder="comprimento:"
        value="{{ $produto_detalhe->comprimento ?? old('comprimento') }}">

    {{ $errors->has('comprimento') ? $errors->first('comprimento') : '' }}

    <input type="text" name="largura" id="largura" class="borda-preta" placeholder="largura:"
        value="{{ $produto_detalhe->largura ?? old('largura') }}">

    {{ $errors->has('largura') ? $errors->first('largura') : '' }}

    <input type="text" name="altura" id="altura" class="borda-preta" placeholder="altura:"
        value="{{ $produto_detalhe->altura ?? old('altura') }}">

    {{ $errors->has('altura') ? $errors->first('altura') : '' }}

    <select name="unidade_id" id="unidade_id">

        <option>-- Selecione a Unidade de Medida --</option>
        @foreach ($unidades as $unidade)
            <option tion value="{{ $unidade->id }}"
                {{ $produto_detalhe->unidade_id ?? old('unidade_id') == $unidade->id ? 'selected' : '' }}>
                {{ $unidade->descricao }}</option>
        @endforeach

    </select>
    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}


    <button type="submit" class="borda-preta">Cadastra</button>

    </form>

</div>
