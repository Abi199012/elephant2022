<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad24Resource extends JsonResource
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
            'ad24002'=>$this->name24002->ref_38002,
            'ad24003'=>$this->ad24003,
            'ad24004'=>$this->ad24004,
            'ad24005'=>$this->ad24005,
        
        
        ];
    }
}
