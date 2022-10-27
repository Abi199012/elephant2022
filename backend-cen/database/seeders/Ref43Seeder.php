<?php

namespace Database\Seeders;
use App\Models\Ref_43;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref43Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ገምጋም ወርሓዊ እቶት
        Ref_43::factory(8)->state(new sequence(
            ['ref_43002' => "ትሕቲ 451 ናቕፋ"],
            ['ref_43002' => "451- 1500 ናቕፋ"],
            ['ref_43002' => "1501-3000 ናቕፋ"],
            ['ref_43002' => "3001 -5000 ናቕፋ"],
            ['ref_43002' => "5001- 7000 ናቕፋ"],
            ['ref_43002' => "7001-1000 ናቕፋ"],
            ['ref_43002' => "10,001-20,000 ናቕፋ"],
            ['ref_43002' => "ልዕሊ 20,000 ናቕፋ"],
        ))->create();

    }
}











