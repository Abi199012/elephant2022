<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad36Resource extends JsonResource
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
            'ad36002'=>$this->ad36002,
            'ad36003'=>$this->ad36003,
            'ad36004'=>$this->ad36004,       
            'ad36005'=>$this->ad36005,       
            'ad36006'=>$this->ad36006,       
            'ad36007'=>$this->ad36007,       
            'ad36008'=>$this->ad36008,       
            'ad36009'=>$this->ad36009,       
            'ad36010'=>$this->ad36010,       
        ];
    }
}
