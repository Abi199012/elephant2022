<?php

namespace Database\Seeders;
use App\Models\Ref_50;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref50Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ዘራእቲ
        Ref_50::factory(20)->state(new sequence(
            ['ref_50002' => "ዓይነት ዘራእቲ"],
        ))->create();
    }
}
