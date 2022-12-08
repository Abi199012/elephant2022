<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad04Resource extends JsonResource
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
            'ad04002'=>$this->name04002->ref_11002,
            'ad04003'=>$this->name04003->ref_08002,
            'ad04004'=>$this->name04004->ref_09002,
            'ad04005'=>$this->ad04005,
            'ad04006'=>$this->ad04006,
            'ad04007'=>$this->ad04007,
            'ad04008'=>$this->ad04008,
            'ad04009'=>$this->name04009->name,
            'ad04010'=>$this->ad04010,
            'ad04011'=>$this->name04009->name,
        ];
    }
}
