<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re20;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re20Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         // Parent_Status_Ref_Table (Orphan)

         Re20::factory(4)->state(new sequence(
            ['re20002' => "ኣቦን ኣደን ኣለው"],
            ['re20002' => "ኣቦን የለን"],
            ['re20002' => "ኣደ የለን"],
            ['re20002' => "ኣቦን ኣደን የለውን"]
        ))->create();
       
    }
}
