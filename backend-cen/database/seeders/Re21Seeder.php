<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re21;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re21Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         //Nationality_Table

         Re21::factory(4)->state(new sequence(
            ['re21002' => "ኤርትራዊ"],
            ['re21002' => "ኢትዮጵያዊ"],
            ['re21002' => "ሱዳናዊ"],
            ['re21002' => "ሶማላዊ"]
        ))->create();

       
    }
}
