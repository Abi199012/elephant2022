<?php

namespace Database\Seeders;
use App\Models\Ref_47;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref47Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ጥሪት 
        Ref_47::factory(15)->state(new sequence(
            ['ref_47002' => "ዓይነት ጥሪት "],
            ['ref_47002' => "ዓይነት ጥሪት "],
        ))->create();
    }
}
