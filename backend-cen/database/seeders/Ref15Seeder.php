<?php

namespace Database\Seeders;
use App\Models\Ref_15;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref15Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         //nationaldutydone
         Ref_15::factory(4)->state(new sequence(
            ['ref_15002' => "ተጋዳላይ"],
            ['ref_15002' => "ሓፋሽ ውዱባት"],
            ['ref_15002' => "ሃገራዊ ኣገልግሎት ኣብ ንጡፍ"],
            ['ref_15002' => "ሃገራዊ ኣገልግሎት ዝተፋነወ"]
        ))->create();
    }
}
