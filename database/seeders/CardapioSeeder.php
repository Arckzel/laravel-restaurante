<?php

namespace Database\Seeders;

use App\Models\Cardapios;
use Illuminate\Database\Seeder;

class CardapioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->criarPizzas();
        $this->criarAlmoco();
        $this->criarCafeDaManha();
    }

    public function criarPizzas(){
        Cardapios::create([
            'nome'  =>  'Pizzas'
        ]);
    }
    public function criarAlmoco(){
        Cardapios::create([
            'nome'  =>  'Almoço'
        ]);
    }
    public function criarCafeDaManha(){
        Cardapios::create([
            'nome'  =>  'Café da Manhã'
        ]);
    }

}
