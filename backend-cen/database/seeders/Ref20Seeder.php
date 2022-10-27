<?php

namespace Database\Seeders;
use App\Models\Ref_20;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref20Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ክራይ 
        Ref_20::factory(3)->state(new sequence(
        ['ref_20002' => "ናይ መንግስቲ"], 
        ['ref_20002' => "ናይ ውልቂ"], 
        ['ref_20002' => "ናይ ትካል"], 
    ))->create();
    }
}
