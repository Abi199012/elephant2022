<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad34Resource extends JsonResource
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
            'ad34002'=>$this->ad34002,
            'ad34003'=>$this->ad34003,
            'ad34004'=>$this->ad34004,       
            'ad34005'=>$this->ad34005,       
            'ad34006'=>$this->ad34006,       
            'ad34007'=>$this->ad34007,       
            'ad34008'=>$this->ad34008,       
            'ad34009'=>$this->name34009->ref_63002,       
        ];
    }
}
