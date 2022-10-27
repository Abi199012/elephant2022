<?php

namespace Database\Seeders;
use App\Models\Ref_67;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref67Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
              //ዘይ-ተመሓላለፍቲ
              Ref_67::factory(10)->state(new sequence(
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 1"],
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 2"],
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 3"],
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 4"],
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 5"],
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 6"],
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 7"],
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 8"],
                ['ref_67002' => "ዘይ-ተመሓላለፍቲ ሕማም 10"],
               ))->create();
    }
}
