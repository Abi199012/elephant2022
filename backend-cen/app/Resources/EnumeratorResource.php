<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EnumeratorResource extends JsonResource
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
            'id'=>$this->id,
            'f_name'=>$this->f_name,
            'm_name'=>$this->m_name,
            'l_name'=>$this->l_name,
            'user_name'=>$this->user_name,
            'phone'=>$this->phone,
            'status'=>$this->status,
        ];
    }
}
