<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re25;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re25Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // house_unit_type_toilet
        Re25::factory(5)->state(new sequence(
            ['re25002' => "ናይ ብሕቲ ማይ ዘፍስስ ሽቃቕ"],
            ['re25002' => "ናይ ሓባር ማይ ዘፍስስ ሽቃቕ"],
            ['re25002' => "ናይ ብሕቲ ጉድጓድ"],
            ['re25002' => "ናይ ሓባር ጉድጓድ"],
            ['re25002' => "ኣብ በረኻ/ግዳም"]
        ))->create();
    }
}
