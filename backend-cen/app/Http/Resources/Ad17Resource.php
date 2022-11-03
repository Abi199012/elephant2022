<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad17Resource extends JsonResource
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
            'ad17002'=>$this->name17002->ref_35002,
            'ad17003'=>$this->name17003->ref_36002,
            'ad17004'=>$this->ad17004,
            'ad17005'=>$this->name17005->ref_37002,
        ];
    }
}

