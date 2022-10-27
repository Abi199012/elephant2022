<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re07;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re07Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ምድብ ሕማማት

        Re07::factory(2)->state(new sequence(
            ['re07002' => "ተመሓላለፍቲ"],
            ['re07002' => "ዘይ-ተመሓላለፍቲ"]
        ))->create();
    }
}
