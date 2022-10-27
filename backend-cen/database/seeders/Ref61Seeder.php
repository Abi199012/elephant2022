<?php

namespace Database\Seeders;
use App\Models\Ref_61;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref61Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ዓይነት ኣታዊታት ቅብሊታትን ካልእ ኣታዊን
        Ref_61::factory(20)->state(new sequence(
            ['ref_61002' => "ዓይነት ኣታዊታት"],
        ))->create();
    }
}
