<?php

namespace Database\Seeders;
use App\Models\Ref_37;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref37Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ሞያ መዓርግ
        Ref_37::factory(6)->state(new sequence(
            ['ref_37002' => "ሰርቲፊኬት"],
            ['ref_37002' => "ዲፕሎማ"],
            ['ref_37002' => "ዲግሪ"],
            ['ref_37002' => "ማስተርስ"],
            ['ref_37002' => "ዶክትሬይት"],
            // ['ref_37002' => "ካልእ (ጽሓፍ)"],
          
            ))->create();
    }
}







