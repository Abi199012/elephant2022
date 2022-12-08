<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad37Resource extends JsonResource
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
            'ad37002'=>$this->ad37002,
            'ad37003'=>$this->ad37003,
            'ad37004'=>$this->ad37004,       
            'ad37005'=>$this->name37005->ref_11002,       
            'ad37006'=>$this->name37006->ref_08002,       
            'ad37007'=>$this->ad37007,       
            'ad37008'=>$this->ad37008,       
            'ad37009'=>$this->namecountry->name,       
            'ad37010'=>$this->ad37010,       
            'ad37011'=>$this->ad37011,       
            'ad37012'=>$this->ad37012,       
        ];
    }
}
