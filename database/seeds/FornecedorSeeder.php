<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instancionado o objeto

        $forneceddor = new Fornecedor();
        $forneceddor->nome = 'Jesus Cristo';
        $forneceddor->site = 'salvador.com.br';
        $forneceddor->uf = 'Ce';
        $forneceddor->email = 'oCaminho@gmail.com';
        $forneceddor->save();


        //O método create(atenção para o atributo fillble da classe)
        Fornecedor::create([
            'nome' => 'Pai Eterno',
            'site' => 'eternidade.com.br',
            'uf' => 'US',
            'email' => 'milagre@gmail.com'
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'Espirito Santo',
            'site' => 'santidade.com.br',
            'uf' => 'TP',
            'email' => 'consolodar@gmail.com'
        ]);
    }
}
