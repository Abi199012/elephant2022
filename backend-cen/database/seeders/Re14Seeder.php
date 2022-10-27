<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re14;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re14Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //እወ ኣይፋል
        Re14::factory(2)->state(new sequence(
            ['re14002' => "እወ"],
            ['re14002' => "ኣይፋል"]
        ))->create();
    }
}
