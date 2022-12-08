<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad20Resource extends JsonResource
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
            'ad20002'=>$this->name20002->ref_27002,
            'ad20003'=>$this->name20003->ref_27002,
            'ad20004'=>$this->name20004->ref_27002,
        
        ];
    }
}
