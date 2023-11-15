<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
                'nome'=>'Renilson Barbosa',
                'email'=> 'nosliner@live.com',
                'endereco'=> 'Rua X',
                'logradouro'=> 'Rua X',
                'cep'=> '13348250',
                'bairro'=> 'Morada do Sol',
        ]);
        Cliente::create([
            'nome'=>'X Barbosa',
            'email'=> 'X@live.com',
            'endereco'=> 'Rua X',
            'logradouro'=> 'Rua X',
            'cep'=> 'X',
            'bairro'=> 'X do Sol',
    ]);
    }
}
