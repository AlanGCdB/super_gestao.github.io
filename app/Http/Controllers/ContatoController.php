<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;
use Symfony\Contracts\Service\Attribute\Required;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }
    public function salvar(Request $request)
    {
        //realizar a validação dos dados do formulário recebidos no request
        $regras =  [
            'nome' => 'required|min:3|max:40|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|max:2000'
        ];

        $feedback = [
            'nome.min' => 'O nome deve ter pelo menos 3 caracteres.',
            'email.email' => 'O e-mail deve ser um endereço de e-mail válido.',
            'motivo_contatos_id.required' => 'O motivo do contato é obrigatoŕio.',
            'mensagem.max' => 'A mensagem não pode ter mais de 2.000 caracteres.',

            'required' => 'O compo :attribute deve ser preenchido'

        ];

        $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
