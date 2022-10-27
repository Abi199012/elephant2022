<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ad10Resource extends JsonResource
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
            'ad10002'=>$this->ad10002,
            'ad10003'=>$this->ad10003,
            'ad10004'=>$this->ad10004,
            'ad10005'=>$this->ad10005,
            'ad10006'=>$this->ad10006,
            'ad10007'=>$this->ad10007,
            'ad10008'=>$this->ad10008,
            'ad10009'=>$this->ad10009,
            'ad10010'=>$this->ad10010,
            'ad10011'=>$this->ad10011,
            'ad10012'=>$this->ad10012,
            'ad10013'=>$this->ad10013,
            'ad10014'=>$this->ad10014,
        ];
    }
}
