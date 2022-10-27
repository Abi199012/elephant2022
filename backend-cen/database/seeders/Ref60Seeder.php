<?php

namespace Database\Seeders;
use App\Models\Ref_60;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref60Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ዘይሕርሻዊ ዋኒን/ ትካል
            Ref_60::factory(20)->state(new sequence(
                ['ref_60002' => "ዓይነት ዘይሕርሻዊ ዋኒን/ ትካል"],
            ))->create();
    }
}
