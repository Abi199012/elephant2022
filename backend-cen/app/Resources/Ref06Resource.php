<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ref06Resource extends JsonResource
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
            'ref_06002' => $this->ref_06002,
            'ref_06003' => $this->ref_06003,
            'ref_06004' => new Ref05Resource($this->village),
            'ref_06005' => $this->ref_06005, 
        ];
    }
}
