<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Re31;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Re31Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //nationaldutydone
         Re31::factory(2)->state(new sequence(
            ['re31002' => "ተጋዳላይ"],
            ['re31002' => "ሓፋሽ ውዱባት"],
            ['re31002' => "ሃገራዊ ኣገልግሎት ኣብ ንጡፍ"],
            ['re31002' => "ሃገራዊ ኣገልግሎት ዝተፋነወ"]
        ))->create();
    }
}
