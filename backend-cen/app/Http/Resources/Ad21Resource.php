<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad21Resource extends JsonResource
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
            'ad21002'=>$this->name21002->ref_44002,
            'ad21003'=>$this->name21003->ref_45002,
            'ad21004'=>$this->name21004->ref_46002,
        
        ];
    }
}
