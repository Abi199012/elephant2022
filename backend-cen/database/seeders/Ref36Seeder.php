<?php

namespace Database\Seeders;
use App\Models\Ref_36;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref36Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         //ዓይነት ሞያ ብኸመይ ኣጥሪኻዮ/ኽዮ
         Ref_36::factory(2)->state(new sequence(
            ['ref_36002' => "ትምህርቲ"],     
            ['ref_36002' => "ተመክሮ"],     
        ))->create();
    }
}
