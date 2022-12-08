<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ref04Resource extends JsonResource
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
            'ref_04002' => $this->ref_04002,
            'ref_04003' => $this->ref_04003,
            'ref_04004' => new Ref02Resource($this->subzone),
            'ref_04005' => $this->ref_04005, 
        ];
    }
}
