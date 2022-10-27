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
            'ad08002'=>$this->ad08002,
            'ad08003'=>$this->ad08003,
            'ad08004'=>$this->ad08004,
            'ad08005'=>$this->ad08005,
            'ad08006'=>$this->ad08006,
            'ad08007'=>$this->ad08007,
            'ad08008'=>$this->ad08008,
            'ad08009'=>$this->ad08009,
        ];
    }
}
