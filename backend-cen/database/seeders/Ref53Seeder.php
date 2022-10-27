<?php

namespace Database\Seeders;
use App\Models\Ref_53;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref53Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ዓሳ
        Ref_53::factory(20)->state(new sequence(
            ['ref_53002' => "ዓይነት ዓሳ"],
        ))->create();
    }
}
