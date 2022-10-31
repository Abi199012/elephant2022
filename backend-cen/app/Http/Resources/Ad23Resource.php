<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad23Resource extends JsonResource
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
            'ad23002'=>$this->ad23002,
            'ad23003'=>$this->ad23003,
            'ad23004'=>$this->ad23004,
            'ad23005'=>$this->ad23005,
            'ad23006'=>$this->ad23006,
        
        ];
    }
}
