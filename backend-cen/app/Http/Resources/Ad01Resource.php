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
            'ad01002'=>$this->name01002->ref_01002,
            'ad01003'=>$this->name01003->ref_02002,
            'ad01004'=>$this->name01004->ref_03002,
            'ad01005'=>$this->name01005->ref_04002,
            'ad01006'=>$this->name01006->ref_05002,
            'ad01007'=>$this->name01007->ref_06002,
            'ኩነታት_መንበሪ'=>new Ad02Resource($this->ad02s),
        ];
    }
}
