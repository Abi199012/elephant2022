<?php

namespace Database\Seeders;
use App\Models\Ref_14;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref14Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Parent_Status_Ref_Table (Orphan)

        Ref_14::factory(4)->state(new sequence(
            ['ref_14002' => "ኣቦን ኣደን ኣለው"],
            ['ref_14002' => "ኣቦን የለን"],
            ['ref_14002' => "ኣደ የለን"],
            ['ref_14002' => "ኣቦን ኣደን የለውን"],
            ['ref_14002' => "ሓበሬታ የብለይን"],
        ))->create();
    }
}
