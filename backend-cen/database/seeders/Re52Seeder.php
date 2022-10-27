<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re52Seeder extends Seeder
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

    ))->create();
    }
}
