<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ref02Resource extends JsonResource
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
            'id' => $this->id,
            'ref_02002' => $this->ref_02002,
            'ref_02003' => $this->ref_02003,
            'ref_02004' => new Ref01Resource($this->zoba),
            'ref_02005' => $this->ref_02005,   
        ];
    }
}
