<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad02Resource extends JsonResource
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
            'area_id'=>$this->area_id,
            'ad02002'=>$this->ad02002,
            'ad02003'=>$this->ad02003,
            'ad02004'=>$this->ad02004,
            'ad02005'=>$this->ad02005,
            'addressThree'=> new Ad03Resource($this->ad03s),
        ];
    }
}
