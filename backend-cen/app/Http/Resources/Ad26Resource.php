<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad26Resource extends JsonResource
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
            'ad26002'=>$this->ad26002,
            'ad26003'=>$this->ad26003,
            'ad26004'=>$this->ad26004,
            'ad26005'=>$this->ad26005,
            'ad26006'=>$this->ad26006,
            'ad26007'=>$this->ad26007,
            'ad26008'=>$this->ad26008,       
            // 'ad26009'=>$this->ad26009,       
            // 'ad26010'=>$this->name26010->ref_63002,       
        ];
    }
}
