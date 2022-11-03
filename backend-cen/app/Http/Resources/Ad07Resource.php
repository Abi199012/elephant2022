<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad07Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

            $data07003 = $this->ad07003;

            if ($data07003 == 1) {
                // this is for inside eritrea
                $datafill07004 = $this->name07004->ref_01002;
                 $datafill07005 = $this->name07005->ref_02002;
              

            }
            elseif ($data07003 == 2) {
              //this is for counrty
                 $datafill07004 = $this->name07004country->name;
                  $datafill07005 = $this->name07005state->name;  
            }



        return [
            'ad07002'=>$this->name07002->ref_64002,
            'ad07003'=>$this->name07003->ref_65002,
            'ad07004'=>$datafill07004,
            'ad07005'=>$datafill07005,
            'ad07006'=>$this->name07006->ref_27002,
            'ad07007'=>$this->name39002,
            'ad07008'=>$this->ad07007,
            'ad07009'=>$this->ad07008,
            'ad07010'=>$this->ad07009,
        ];
    }
}
