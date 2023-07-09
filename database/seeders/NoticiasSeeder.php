<?php

namespace Database\Seeders;
use App\Models\Models\ModelNoticias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelNoticias $noticias): void
    {
        $noticias->create([
            'id_adm'=>'1',
            'titulo'=>'Mensagem de teste 1',
            'mensagem'=>'teste teste teste teste'
        ]);

        $noticias->create([
            'id_adm'=>'2',
            'titulo'=>'Mensagem de teste 2',
            'mensagem'=>'teste teste teste teste'
        ]);

        $noticias->create([
            'id_adm'=>'1',
            'titulo'=>'Mensagem de teste 3',
            'mensagem'=>'teste teste teste teste'
        ]);
    }
}
