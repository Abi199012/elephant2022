<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad27Resource extends JsonResource
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
            'ad27002'=>$this->ad27002,
            'ad27003'=>$this->ad27003,
            'ad27004'=>$this->ad27004,       
            'ad27005'=>$this->name27005->ref_63002,       
        ];
    }
}
