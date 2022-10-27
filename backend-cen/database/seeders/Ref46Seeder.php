<?php

namespace Database\Seeders;
use App\Models\Ref_46;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref46Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ደረጃ ስራሕካ፧
        Ref_46::factory(10)->state(new sequence(
            ['ref_46002' => "ደረጃ ስራሕካ"],
            ['ref_46002' => "ደረጃ ስራሕካ"],
            ['ref_46002' => "ደረጃ ስራሕካ"],
            ['ref_46002' => "ደረጃ ስራሕካ"],
            ['ref_46002' => "ደረጃ ስራሕካ"],
           
        ))->create();
    }
}
