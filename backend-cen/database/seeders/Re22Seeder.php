<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re22;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re22Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Employement_Status_ref_Table
         Re22::factory(2)->state(new sequence(
            ['re22002' => "ሰራሕተኛ"],
            ['re22002' => "ሰራሕተኛ ዘይብሉ"]
        ))->create();
    }
}
