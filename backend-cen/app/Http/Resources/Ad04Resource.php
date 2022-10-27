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
            'ad04002'=>$this->ad04002,
            'ad04003'=>$this->ad04003,
            'ad04004'=>$this->ad04004,
            'ad04005'=>$this->ad04005,
            'ad04006'=>$this->ad04006,
            'ad04007'=>$this->ad04007,
            'ad04008'=>$this->ad04008,
            'ad04009'=>$this->ad04009,
            'ad04010'=>$this->ad04010,
            'ad04011'=>$this->ad04011,
        ];
    }
}
