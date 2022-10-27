<?php

namespace Database\Seeders;
use App\Models\Ref_58;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref58Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ዓይነት ኣታዊታት AG
        Ref_58::factory(20)->state(new sequence(
            ['ref_58002' => "ዓይነት ኣታዊታት AG"],
        ))->create();
    }
}
