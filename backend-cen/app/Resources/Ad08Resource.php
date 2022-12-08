<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad08Resource extends JsonResource
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
            'ad08002'=>$this->name08002->ref_18002,
            'ad08003'=>$this->ad08003,
            'ad08004'=>$this->name08004->ref_19002,
            'ad08005'=>$this->name08005->ref_20002,
            'ad08006'=>$this->ad08006,
            'ad08007'=>$this->name08007->ref_63002,
            'ad08008'=>$this->name08008->ref_22002,
            'ad08009'=>$this->name08009->ref_21002,
            'ad08010'=>$this->name08010->ref_23002,
        ];
    }
}
