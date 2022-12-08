<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ref03Resource extends JsonResource
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
            'ref_03002' => $this->ref_03002,
            'ref_03003' => $this->ref_03003,
            'ref_03004' => new Ref02Resource($this->subzoba),
            'ref_03005' => $this->ref_03005,   
        ];
    }
}
