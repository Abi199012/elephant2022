<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad39Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
    return [
        'ad39002'=>$this->name39002->ref_16002, 
          'ኣገልጉሎት_ዘይፈጸመ'=>new Ad39Resource($this->ad39),
            'ኣገልጉሎት_ዝፈጸመ'=>new Ad40Resource($this->ad40),
    ];
    }
    
}
