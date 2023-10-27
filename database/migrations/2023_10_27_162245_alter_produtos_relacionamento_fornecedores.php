<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterProdutosRelacionamentoFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            // insere em registro de fornecedor para estabelecer o relacionamento

            $fornecedor_id = DB::table('fornecedores')->insertGetId([
                 'nome' => 'Fornecedor Padrão SG',
                 'site' => 'forncedorpadraosg.com.br',
                 'uf' => 'SP',
                 'email' => 'forncedorpadraosg@gmail.com',
             ]);
            // criando a coluna em produtos que vai resceber a fk de fornecedores

            $table->unsignedBigInteger('fornecedor_id')->default($fornecedor_id)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign('produtos_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');
        });
    }
}