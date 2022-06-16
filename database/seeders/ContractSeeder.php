<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contract;
class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contractList = ['ops', 'Termino fijo', 'Termino indefinido', 'Aprendizaje'];
        foreach($contractList as $contract){
            $c = new Contract();
            $c -> tipo = $contract;
            $c -> estado = true;
            $c -> save();
        }
    }
}
