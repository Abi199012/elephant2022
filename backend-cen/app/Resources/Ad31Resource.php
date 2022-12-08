<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad31Resource extends JsonResource
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
            'ad31002'=>$this->ad31002,
            'ad31003'=>$this->ad31003,
            'ad31004'=>$this->ad31004,       
            'ad31005'=>$this->ad31005,       
            'ad31006'=>$this->ad31006,       
            'ad31007'=>$this->ad31007,       
            'ad31008'=>$this->ad31008,       
            'ad31009'=>$this->name31009->ref_63002,       
        ];
    }
}
