<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad35Resource extends JsonResource
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
            'ad35002'=>$this->ad35002,
            'ad35003'=>$this->ad35003,
            'ad35004'=>$this->ad35004,       
            'ad35005'=>$this->name35005->ref_63002,   
        ];
    }
}
