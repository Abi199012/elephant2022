<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re44;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re44Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // መስፈሪ መዐቀኒ መጠን ዓሳ
        Re44::factory(5)->state(new sequence(
            ['re44002' => "sample"],
            ['re44002' => "sample"],
            ['re44002' => "sample"],
            ['re44002' => "sample"],
            ['re44002' => "sample"],
        ))->create();
    }
}
