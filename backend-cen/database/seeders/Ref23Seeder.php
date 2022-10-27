<?php

namespace Database\Seeders;
use App\Models\Ref_23;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref23Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // house_unit_type_toilet
         Ref_23::factory(5)->state(new sequence(
            ['ref_23002' => "ናይ ብሕቲ ማይ ዘፍስስ ሽቃቕ"],
            ['ref_23002' => "ናይ ሓባር ማይ ዘፍስስ ሽቃቕ"],
            ['ref_23002' => "ናይ ብሕቲ ጉድጓድ"],
            ['ref_23002' => "ናይ ሓባር ጉድጓድ"],
            ['ref_23002' => "ኣብ በረኻ/ግዳም"]
        ))->create();
    }
}
