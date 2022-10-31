<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad22Resource extends JsonResource
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
            'ad22002'=>$this->ad22002,
            'ad22003'=>$this->ad22003,
            'ad22004'=>$this->ad22004,
            'ad22005'=>$this->ad22005,
            'ad22006'=>$this->ad22006,
        
        ];
    }
}
