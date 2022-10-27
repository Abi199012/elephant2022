<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re43;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re43Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ዓሳ
        Re43::factory(4)->state(new sequence(
            ['re43002' => "sammpl"],
            ['re43002' => "sammpl"],
            ['re43002' => "sammpl"],
            ['re43002' => "sammpl"],
        ))->create();

    }
}
