<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad01Resource extends JsonResource
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
            'ad01002'=>$this->ad01002,
            'ad01003'=>$this->ad01003,
            'ad01004'=>$this->ad01004,
            'ad01005'=>$this->ad01005,
            'ad01006'=>$this->ad01006,
            'ad01007'=>$this->ad01007,
            'addressTwo'=>new Ad02Resource($this->ad02s),
        ];
    }
}
