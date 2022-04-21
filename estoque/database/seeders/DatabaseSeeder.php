<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(ProdutoTableSeeder::class);
    }
}


class ProdutoTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::insert('insert into produtos (descricao, dataCompra, valor, ativo, quantidadeEstoque) values (?,?,?,?,?)', array('Side by Side com gelo na porta', '18/04/2022', 120.00, 'sim', 50));

        // DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)',  array('Fogão', 5, 10.00, 'Painel automático e forno elétrico'));

        // DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array('Microondas', 1, 60.00, 'Manda SMS quando termina de esquentar'));

    }
}