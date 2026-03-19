<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusAll = ['Concluido', 'Em Andamento', 'Pendente'];

        foreach($statusAll as $status){

            Status::factory()->create([
                'name' => $status,
            ]);
        }
    }
}
