<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad32Resource extends JsonResource
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
            'ad32002'=>$this->ad32002,
            'ad32003'=>$this->ad32003,
            'ad32004'=>$this->ad32004,       
            'ad32005'=>$this->ad32005,       
            'ad32006'=>$this->ad32006,       
            'ad32007'=>$this->ad32007,       
            'ad32008'=>$this->ad32008,       
            'ad32009'=>$this->name32009->ref_63002,       
        ];
    }
}
