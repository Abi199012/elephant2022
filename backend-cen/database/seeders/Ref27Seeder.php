<?php

namespace Database\Seeders;
use App\Models\Ref_27;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref27Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // እወ / ኣይፋል
           Ref_27::factory(2)->state(new sequence(
            ['ref_27002' => "እወ"],
            ['ref_27002' => "ኣይፋል"],
        ))->create();
    }
}
