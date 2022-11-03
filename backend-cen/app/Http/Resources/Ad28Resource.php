<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad28Resource extends JsonResource
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
            'ad28002'=>$this->ad28002,
            'ad28003'=>$this->ad28003,
            'ad28004'=>$this->ad28004,       
            'ad28005'=>$this->ad28005,       
            'ad28006'=>$this->ad28006,       
            'ad28007'=>$this->ad28007,       
            'ad28008'=>$this->ad28008,       
            'ad28009'=>$this->name28009->ref_63002,       
        ];
    }
}
