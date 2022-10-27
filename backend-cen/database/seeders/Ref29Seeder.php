<?php

namespace Database\Seeders;
use App\Models\Ref_29;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref29Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // ምድብ ሕማማት
      Ref_29::factory(2)->state(new sequence(
        ['ref_29002' => "ተመሓላለፍቲ ሕማማት"],
        ['ref_29002' => "ዘይ-ተመሓላለፍቲ ሕማማት"],
        ))->create();
    }

}
