<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re48;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re48Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ኣታዊታት AG 
        Re48::factory(6)->state(new sequence(
            ['re48002' => "sample 1"],
            ['re48002' => "sample 1"],
            ['re48002' => "sample 1"],
            ['re48002' => "sample 1"],
            ['re48002' => "sample 1"],
            ['re48002' => "sample 1"],
        ))->create();

    }
}
