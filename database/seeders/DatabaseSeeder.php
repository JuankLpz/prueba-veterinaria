<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $agenda = new Agenda();
        $agenda->Descripcion="Agenda de prueba, principal";
        $agenda->save();

    }
}
