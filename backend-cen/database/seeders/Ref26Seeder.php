<?php

namespace Database\Seeders;
use App\Models\Ref_26;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref26Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // ምንጪ ሓበሬታ
         Ref_26::factory(5)->state(new sequence(
            ['ref_26002' => "ሬድዮ"],
            ['ref_26002' => "ተለቪዥን"],
            ['ref_26002' => "ኢንተርነት"],
            ['ref_26002' => "ጋዜጣ"],
            ['ref_26002' => "ካልእ (ጽሓፍ)"],
        ))->create();
    }
}

