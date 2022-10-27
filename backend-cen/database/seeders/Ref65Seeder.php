<?php

namespace Database\Seeders;
use App\Models\Ref_65;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref65Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // ቦታ ህላወ
          Ref_65::factory(2)->state(new sequence(
            ['ref_65002' => "ውሽጢ ሃገር"],
            ['ref_65002' => "ወጻኢ ሃገር"],
           ))->create();
    }
}
