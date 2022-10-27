<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re42;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re42Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ስፍሓት መሬት
        Re42::factory(4)->state(new sequence(
            ['re42002' => "ሄክታር"],
            ['re42002' => "ጽምዲ "],
            ['re42002' => "ገምል"],
            ['re42002' => "ሰዓታት ብ ትራኽተር ንክሕረስ"],
        ))->create();
    }
}