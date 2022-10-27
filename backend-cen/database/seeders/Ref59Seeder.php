<?php

namespace Database\Seeders;
use App\Models\Ref_59;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref59Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //ዓይነት ኣታዊታት NAG
         Ref_59::factory(20)->state(new sequence(
            ['ref_59002' => "ዓይነት ኣታዊታት NAG"],
        ))->create();
    }
}
