<?php

namespace App\Http\Controllers;

use App\ItemDetalhe;
use App\ProdutoDetalhe;
use App\Unidade;
use Illuminate\Http\Request;

class ProdutoDetalheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unidades = Unidade::all();

        return view('app.produto_detalhe.create', ['unidades' => $unidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProdutoDetalhe::create($request->all());

        echo 'Cadastro realizado com sucesso!';
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtoDetalhe = ItemDetalhe::with(['item'])->find($id);
        $unidades = Unidade::all();

        return view('app.produto_detalhe.edit', ['unidades' => $unidades, 'produto_detalhe' => $produtoDetalhe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param App\ProdutoDetalhe $produtoDetalhe
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoDetalhe $produtoDetalhe)
    {
        $produtoDetalhe->update($request->all());

        // return redirect()->route('app.produto_detalhe.list');
        echo 'Atualizou';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
