<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re49;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re49Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ኣታዊታት NAG
        Re49::factory(6)->state(new sequence(
            ['re49002' => "sample nag"],
            ['re49002' => "sample nag"],
            ['re49002' => "sample nag"],
            ['re49002' => "sample nag"],
            ['re49002' => "sample nag"],
            ['re49002' => "sample nag"],
        ))->create();
    }
}
