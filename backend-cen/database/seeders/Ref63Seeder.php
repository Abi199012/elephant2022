<?php

namespace Database\Seeders;
use App\Models\Ref_63;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref63Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // ገንዘብ
         Ref_63::factory(5)->state(new sequence(
            ['ref_63002' => "ናቕፋ"],
            ['ref_63002' => "ዶላር"],
            ['ref_63002' => "ፓውንድ"],
            ['ref_63002' => "ብር"],
            ['ref_63002' => "ኢይሮ"],
           ))->create();
    }
}
