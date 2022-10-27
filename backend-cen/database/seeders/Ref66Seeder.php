<?php

namespace Database\Seeders;
use App\Models\Ref_66;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref66Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            // ተመሓላለፍቲ
            Ref_66::factory(10)->state(new sequence(
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 1"],
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 2"],
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 3"],
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 4"],
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 5"],
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 6"],
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 7"],
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 8"],
                ['ref_66002' => "ተመሓላለፍቲ ሕማም 10"],
               ))->create();
    }
}
