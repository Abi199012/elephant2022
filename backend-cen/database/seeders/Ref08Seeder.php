<?php

namespace Database\Seeders;
use App\Models\Ref_08;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref08Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ref_08::factory(2)->state(new sequence(
            ['ref_08002' => "ኣን"],
            ['ref_08002' => "ተባ"],
        ))->create();
    }
}
