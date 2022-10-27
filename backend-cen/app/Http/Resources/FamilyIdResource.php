<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FamilyIdResource extends JsonResource
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
            'fId' => $this->family_id,
            'f_name_head' => $this->f_name_head,
            'm_name_head' => $this->m_name_head,
            'l_name_head' => $this->l_name_head,
            'family_members'=>PersonalIdResource::collection($this->personalids),
            'Address'=>new Ad01Resource($this->ad01s),
            'መንበርን_ቀረባትን'=>new Ad08Resource($this->ad08s),

        ];
    }
}


// 're03005' => Re04Resource::collection($this->kebabi),