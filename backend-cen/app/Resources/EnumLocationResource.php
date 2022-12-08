<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EnumLocationResource extends JsonResource
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
            'id' => $this->id,
            'zoba_id' => $this->zoba->id,
            'zoba_name' => $this->zoba->ref_01002,
            'sub_zoba_id' =>$this->subzoba->id,
            'sub_zoba_name' =>$this->subzoba->ref_02002,
            'town_id' =>$this->town->id,
            'town_name' =>$this->town->ref_03002,
            'kebabi_id' => $this->kebabi->id,
            'kebabi_name' => $this->kebabi->ref_04002,
            'Village_id' => $this->village->id,
            'Village_name' => $this->village->ref_05002,
            'enum_area_id' => $this->enumarea->id,
            'enum_area_name' => $this->enumarea->ref_06002,
            'enum_id' => $this->enum_area_id,

        ];
    }
}
