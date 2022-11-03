<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad33Resource extends JsonResource
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
            'ad33002'=>$this->ad33002,
            'ad33003'=>$this->ad33003,
            'ad33004'=>$this->ad33004,       
            'ad33005'=>$this->name33005->ref_63002,       
        ];
    }
}
