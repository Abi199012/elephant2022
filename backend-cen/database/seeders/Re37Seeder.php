<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re37;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re37Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // ክራይ 

         Re37::factory(3)->state(new sequence(
            ['re37002' => "ናይ መንግስቲ"], 
            ['re37002' => "ናይ ውልቂ"], 
            ['re37002' => "ናይ ትካል"], 
        ))->create();
    }
}
