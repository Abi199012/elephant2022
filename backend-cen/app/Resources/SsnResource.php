<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SsnResource extends JsonResource
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
//            'id' => $this->id,
            'persone_id' => $this->persone_id,
            'dob' => $this->dob,
            'serial_id' => $this->serial_id
        ];
    }
}
