<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re51;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re51Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ምንጪ ሓበሬታ

        Re51::factory(5)->state(new sequence(
            ['re51002' => "ሬድዮ"],
            ['re51002' => "ተለቪዥን"],
            ['re51002' => "ኢንተርነት"],
            ['re51002' => "ጋዜጣ"],
            ['re51002' => "ካልእ"],
        ))->create();
    }
}






