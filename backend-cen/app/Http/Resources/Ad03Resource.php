<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad03Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return  [
            'residence_id'=>$this->residence_id,
            'ad03002'=>$this->ad03002,
            'ad03003'=>$this->ad03003,
            'ad03004'=>$this->ad03004,
            'ad03005'=>$this->ad03005,
            'ad03006'=>$this->ad03006,
        ];
    }
}
