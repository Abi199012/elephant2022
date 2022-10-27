<?php

namespace Database\Seeders;
use App\Models\Ref_52;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref52Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ኣብ ዝሓለፈ ክራማት እዛ ስድራ ዘልምዓቶ ስፍሓት መሬት
        Ref_52::factory(2)->state(new sequence(
            ['ref_52002' => "ሄክታር"],
            ['ref_52002' => "ጽምዲ"],
            ['ref_52002' => "ገምል"],
            ['ref_52002' => "ሰዓታት ብ ትራኽተር ንክሕረስ"],
        ))->create();
    }
}







