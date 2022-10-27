<?php

namespace Database\Seeders;

use App\Models\Re02;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class Re02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Re02::factory(58)->state(new sequence(
            ['re02002' => "Mai ani",'re02003' => '1','re02004' => '1'],
            ['re02002' => "Tsorona",'re02003' => '2','re02004' => '1'],
            ['re02002' => "Emni Haili",'re02003' => '3','re02004' => '1'],
            ['re02002' => "Adi Keyh",'re02003' => '4','re02004' => '1'],
            ['re02002' => "Adi Quala",'re02003' => '5','re02004' => '1'],
            ['re02002' => "Areza",'re02003' => '6','re02004' => '1'],
            ['re02002' => "Debarwa",'re02003' => '7','re02004' => '1'],
            ['re02002' => "Dekemhare",'re02003' => '8','re02004' => '1'],
            ['re02002' => "Mai-Mne",'re02003' => '9','re02004' => '1'],
            ['re02002' => "Mendefera",'re02003' => '10','re02004' => '1'],
            ['re02002' => "Segeneiti",'re02003' => '11','re02004' => '1'],
            ['re02002' => "Senafe",'re02003' => '12','re02004' => '1'],
            ['re02002' => "Berikh",'re02003' => '13','re02004' => '2'],
            ['re02002' => "Ghala Nefhi",'re02003' => '14','re02004' => '2'],
            ['re02002' => "North Eastern",'re02003' => '15','re02004' => '2'],
            ['re02002' => "North western",'re02003' => '16','re02004' => '2'],
            ['re02002' => "Serejaka",'re02003' => '17','re02004' => '2'],
            ['re02002' => "South Eastern",'re02003' => '18','re02004' => '2'],
            ['re02002' => "South Western",'re02003' => '19','re02004' => '2'],
            ['re02002' => "Adi Tekelezan",'re02003' => '20','re02004' => '3'],
            ['re02002' => "Asmat",'re02003' => '21','re02004' => '3'],
            ['re02002' => "Hamelmalo",'re02003' => '22','re02004' => '3'],
            ['re02002' => "Elabered",'re02003' => '23','re02004' => '3'],
            ['re02002' => "Geleb",'re02003' => '24','re02004' => '3'],
            ['re02002' => "Hagaz",'re02003' => '25','re02004' => '3'],
            ['re02002' => "Halhal",'re02003' => '26','re02004' => '3'],
            ['re02002' => "Habero",'re02003' => '27','re02004' => '3'],
            ['re02002' => "Keren",'re02003' => '28','re02004' => '3'],
            ['re02002' => "Kerkebet",'re02003' => '29','re02004' => '3'],
            ['re02002' => "Sela",'re02003' => '30','re02004' => '3'],
            ['re02002' => "Akurdet",'re02003' => '31','re02004' => '3'],
            ['re02002' => "Barentu",'re02003' => '32','re02004' => '4'],
            ['re02002' => "Aderde",'re02003' => '33','re02004' => '4'],
            ['re02002' => "Forto",'re02003' => '34','re02004' => '4'],
            ['re02002' => "Gogne",'re02003' => '35','re02004' => '4'],
            ['re02002' => "Goluj",'re02003' => '36','re02004' => '4'],
            ['re02002' => "Haykota",'re02003' => '37','re02004' => '4'],
            ['re02002' => "Logo Anseba",'re02003' => '38','re02004' => '4'],
            ['re02002' => "Mensura",'re02003' => '39','re02004' => '4'],
            ['re02002' => "Mogolo",'re02003' => '40','re02004' => '4'],
            ['re02002' => "Molki",'re02003' => '41','re02004' => '4'],
            ['re02002' => "Shambuko",'re02003' => '42','re02004' => '4'],
            ['re02002' => "Teseney",'re02003' => '43','re02004' => '4'],
            ['re02002' => "Upper Gash",'re02003' => '44','re02004' => '4'],
            ['re02002' => "Afabet",'re02003' => '45','re02004' => '5'],
            ['re02002' => "Adobha",'re02003' => '46','re02004' => '5'],
            ['re02002' => "Dahlak",'re02003' => '47','re02004' => '5'],
            ['re02002' => "Ghela'elo",'re02003' => '48','re02004' => '5'],
            ['re02002' => "Foro",'re02003' => '49','re02004' => '5'],
            ['re02002' => "Ghinda",'re02003' => '50','re02004' => '5'],
            ['re02002' => "Karura",'re02003' => '51','re02004' => '5'],
            ['re02002' => "Massawa",'re02003' => '52','re02004' => '5'],
            ['re02002' => "Nakfa",'re02003' => '53','re02004' => '5'],
            ['re02002' => "She'eb",'re02003' => '54','re02004' => '5'],
            ['re02002' => "Are'eta",'re02003' => '55','re02004' => '6'],
            ['re02002' => "Assab",'re02003' => '56','re02004' => '6'],
            ['re02002' => "Central Denkalya",'re02003' => '57','re02004' => '6'],
            ['re02002' => "Southern Denkalya",'re02003' => '58','re02004' => '6'],

        ))->create();
    }
}


