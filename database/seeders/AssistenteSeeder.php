<?php

namespace Database\Seeders;
use App\Models\Models\ModelAssistente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssistenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelAssistente $assistentes): void
    {
        $assistentes->create([
            'id_adm' => '1',
            'nome' => 'Ana',
            'email' => 'ana@email.',
            'senha' => '123',
            'confirmaSenha' => '123',
            'matricula' => '15',
        ]);

        $assistentes->create([
            'id_adm' => '2',
            'nome' => 'Maria',
            'email' => 'maria@email.',
            'senha' => '123',
            'confirmaSenha' => '123',
            'matricula' => '135',
        ]);

        $assistentes->create([
            'id_adm' => '1',
            'nome' => 'Julia',
            'email' => 'julia@email.',
            'senha' => '123',
            'confirmaSenha' => '123',
            'matricula' => '789',
        ]);

    }
}
