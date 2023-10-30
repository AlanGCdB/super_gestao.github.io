<div class="form-fornecedor">

    @if (isset($cliente->id))
        <form action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}" method="post">
            @method('PUT')
            @csrf
        @else
            <form action="{{ route('cliente.store') }}" method="post">
                @csrf
    @endif

    <input type="text" name="nome" id="nome" class="borda-preta" placeholder="Nome:"
        value="{{ $cliente->nome ?? old('nome') }}">

    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

    <button type="submit" class="borda-preta">Cadastra</button>

    </form>

</div>
