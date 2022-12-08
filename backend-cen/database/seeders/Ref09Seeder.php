<?php

namespace Database\Seeders;
use App\Models\Ref_09;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref09Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ref_09::factory(7)->state(new sequence(
            ['ref_09002' => "ኤርትራዊ"],
            ['ref_09002' => "ኢትዮጵያዊ"],
            ['ref_09002' => "ሱዳናዊ"],
            ['ref_09002' => "የመናዊ"],
            ['ref_09002' => "ጁቡታዊ"],
            ['ref_09002' => "ኬንያዊ"],
            ['ref_09002' => "somalawi"],
        ))->create();
    }
}
