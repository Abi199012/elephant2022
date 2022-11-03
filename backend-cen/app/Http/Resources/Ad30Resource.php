<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad30Resource extends JsonResource
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
            'ad30002'=>$this->ad30002,
            'ad30003'=>$this->ad30003,
            'ad30004'=>$this->ad30004,       
            'ad30005'=>$this->ad30005,       
            'ad30006'=>$this->ad30006,       
            'ad30007'=>$this->ad30007,       
            'ad30008'=>$this->ad30008,       
            'ad30009'=>$this->name30009->ref_63002,       
        ];
    }
}
