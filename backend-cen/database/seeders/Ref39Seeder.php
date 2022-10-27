<?php

namespace Database\Seeders;
use App\Models\Ref_39;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref39Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ኩነታት ስራሕ
        Ref_39::factory(2)->state(new sequence(
            ['ref_39002' => "ሰራሕተኛ"],
            ['ref_39002' => "ስራሕ ዘይብሉ"],
        ))->create();
    }
}
