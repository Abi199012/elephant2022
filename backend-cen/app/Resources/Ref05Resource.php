<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ref05Resource extends JsonResource
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
            'ref_05002' => $this->ref_05002,
            'ref_05003' => $this->ref_05003,
            'ref_05004' => new Ref04Resource($this->kebabi),
            'ref_05005' => $this->ref_05005,
        ];
    }
}
