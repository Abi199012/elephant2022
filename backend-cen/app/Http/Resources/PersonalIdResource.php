<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonalIdResource extends JsonResource
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
            'pId' => $this->personal_id,
            'ssn_data' => new SsnDataResource($this->ssnids),
            'f_name_personal' => $this->f_name_personal,
            'm_name_personal' => $this->m_name_personal,
            'l_name_personal' => $this->l_name_personal,
            'personalInfo' =>new Ad04Resource($this->ad04),
            'maritalStatus' =>new Ad06Resource($this->ad06),
            'personalPresence' =>new Ad07Resource($this->ad07),
            'ብሂወት_ዝተወልደ_ቆልዓ_ወሊድኪ_ትፈልጢ_ዶ'=>new Ad09Resource($this->ad09),
            'ፍርያምነት'=>new Ad10Resource($this->ad10),
            'ጥዕና'=> Ad11Resource::collection($this->ad11),
                   ];
    }
}
