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
        return [
            'ad07002'=>$this->name07002->ref_64002,
            'ad07003'=>$this->name07003->ref_65002,
            'ad07004'=>$this->ad07003,
            'ad07005'=>$this->ad07005,
            'ad07006'=>$this->ad07006,
            'ad07007'=>$this->ad07007,
            'ad07008'=>$this->ad07008,
            'ad07009'=>$this->ad07009,
        ];
    }
}
