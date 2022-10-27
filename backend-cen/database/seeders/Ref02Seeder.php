<?php

namespace Database\Seeders;
use App\Models\Ref_02;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Ref02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ref_02::factory(58)->state(new sequence(
            ['ref_02002' => "Mai ani",'ref_02003' => '1','ref_02004' => '1'],
            ['ref_02002' => "Tsorona",'ref_02003' => '2','ref_02004' => '1'],
            ['ref_02002' => "Emni Haili",'ref_02003' => '3','ref_02004' => '1'],
            ['ref_02002' => "Adi Keyh",'ref_02003' => '4','ref_02004' => '1'],
            ['ref_02002' => "Adi Quala",'ref_02003' => '5','ref_02004' => '1'],
            ['ref_02002' => "Areza",'ref_02003' => '6','ref_02004' => '1'],
            ['ref_02002' => "Debarwa",'ref_02003' => '7','ref_02004' => '1'],
            ['ref_02002' => "Dekemhare",'ref_02003' => '8','ref_02004' => '1'],
            ['ref_02002' => "Mai-Mne",'ref_02003' => '9','ref_02004' => '1'],
            ['ref_02002' => "Mendefera",'ref_02003' => '10','ref_02004' => '1'],
            ['ref_02002' => "Segeneiti",'ref_02003' => '11','ref_02004' => '1'],
            ['ref_02002' => "Senafe",'ref_02003' => '12','ref_02004' => '1'],
            ['ref_02002' => "Berikh",'ref_02003' => '13','ref_02004' => '2'],
            ['ref_02002' => "Ghala Nefhi",'ref_02003' => '14','ref_02004' => '2'],
            ['ref_02002' => "North Eastern",'ref_02003' => '15','ref_02004' => '2'],
            ['ref_02002' => "North western",'ref_02003' => '16','ref_02004' => '2'],
            ['ref_02002' => "Serejaka",'ref_02003' => '17','ref_02004' => '2'],
            ['ref_02002' => "South Eastern",'ref_02003' => '18','ref_02004' => '2'],
            ['ref_02002' => "South Western",'ref_02003' => '19','ref_02004' => '2'],
            ['ref_02002' => "Adi Tekelezan",'ref_02003' => '20','ref_02004' => '3'],
            ['ref_02002' => "Asmat",'ref_02003' => '21','ref_02004' => '3'],
            ['ref_02002' => "Hamelmalo",'ref_02003' => '22','ref_02004' => '3'],
            ['ref_02002' => "Elabered",'ref_02003' => '23','ref_02004' => '3'],
            ['ref_02002' => "Geleb",'ref_02003' => '24','ref_02004' => '3'],
            ['ref_02002' => "Hagaz",'ref_02003' => '25','ref_02004' => '3'],
            ['ref_02002' => "Halhal",'ref_02003' => '26','ref_02004' => '3'],
            ['ref_02002' => "Habero",'ref_02003' => '27','ref_02004' => '3'],
            ['ref_02002' => "Keren",'ref_02003' => '28','ref_02004' => '3'],
            ['ref_02002' => "Kerkebet",'ref_02003' => '29','ref_02004' => '3'],
            ['ref_02002' => "Sela",'ref_02003' => '30','ref_02004' => '3'],
            ['ref_02002' => "Akurdet",'ref_02003' => '31','ref_02004' => '3'],
            ['ref_02002' => "Barentu",'ref_02003' => '32','ref_02004' => '4'],
            ['ref_02002' => "Aderde",'ref_02003' => '33','ref_02004' => '4'],
            ['ref_02002' => "Forto",'ref_02003' => '34','ref_02004' => '4'],
            ['ref_02002' => "Gogne",'ref_02003' => '35','ref_02004' => '4'],
            ['ref_02002' => "Goluj",'ref_02003' => '36','ref_02004' => '4'],
            ['ref_02002' => "Haykota",'ref_02003' => '37','ref_02004' => '4'],
            ['ref_02002' => "Logo Anseba",'ref_02003' => '38','ref_02004' => '4'],
            ['ref_02002' => "Mensura",'ref_02003' => '39','ref_02004' => '4'],
            ['ref_02002' => "Mogolo",'ref_02003' => '40','ref_02004' => '4'],
            ['ref_02002' => "Molki",'ref_02003' => '41','ref_02004' => '4'],
            ['ref_02002' => "Shambuko",'ref_02003' => '42','ref_02004' => '4'],
            ['ref_02002' => "Teseney",'ref_02003' => '43','ref_02004' => '4'],
            ['ref_02002' => "Upper Gash",'ref_02003' => '44','ref_02004' => '4'],
            ['ref_02002' => "Afabet",'ref_02003' => '45','ref_02004' => '5'],
            ['ref_02002' => "Adobha",'ref_02003' => '46','ref_02004' => '5'],
            ['ref_02002' => "Dahlak",'ref_02003' => '47','ref_02004' => '5'],
            ['ref_02002' => "Ghela'elo",'ref_02003' => '48','ref_02004' => '5'],
            ['ref_02002' => "Foro",'ref_02003' => '49','ref_02004' => '5'],
            ['ref_02002' => "Ghinda",'ref_02003' => '50','ref_02004' => '5'],
            ['ref_02002' => "Karura",'ref_02003' => '51','ref_02004' => '5'],
            ['ref_02002' => "Massawa",'ref_02003' => '52','ref_02004' => '5'],
            ['ref_02002' => "Nakfa",'ref_02003' => '53','ref_02004' => '5'],
            ['ref_02002' => "She'eb",'ref_02003' => '54','ref_02004' => '5'],
            ['ref_02002' => "Are'eta",'ref_02003' => '55','ref_02004' => '6'],
            ['ref_02002' => "Assab",'ref_02003' => '56','ref_02004' => '6'],
            ['ref_02002' => "Central Denkalya",'ref_02003' => '57','ref_02004' => '6'],
            ['ref_02002' => "Southern Denkalya",'ref_02003' => '58','ref_02004' => '6'],

        ))->create();
    }
}
