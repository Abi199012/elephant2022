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
            'ቛንቛ'=> Ad38Resource::collection($this->ad38s),
            'ኣገልጉሎት_ዘይፈጸመ'=>new Ad39Resource($this->ad39),
            'ኣገልጉሎት_ዝፈጸመ'=>new Ad40Resource($this->ad40),
            'maritalStatus' =>new Ad06Resource($this->ad06),
            'personalPresence' =>new Ad07Resource($this->ad07),
            'ብሂወት_ዝተወልደ_ቆልዓ_ወሊድኪ_ትፈልጢ_ዶ'=>new Ad09Resource($this->ad09),
            'ፍርያምነት'=>new Ad10Resource($this->ad10),
            'ጥዕና'=> new  Ad11Resource($this->ad11),
            'ተማሓላለፍቲ_ሕማም'=> Ad12Resource::collection($this->ad12s),
            'ዘይ_ተመሓለፍቲ_ሕማም'=> Ad13Resource::collection($this->ad13s),
            'ዓይነት_ስንክልና'=> Ad14Resource::collection($this->ad14s),
            'ምኽንያት_ስንክልና'=> Ad44Resource::collection($this->ad44s),
            'ዓይነት_ደም'=> new Ad15Resource($this->ad15),
            'ደረጃ_ትምህርቲ'=> new Ad16Resource($this->ad16),
            'ሞያ'=> Ad17Resource::collection($this->ad17s),
            'ኩነታት_ስራሕ'=> new Ad18Resource($this->ad18),
            'ስራሕ'=> new Ad19Resource($this->ad19),
            // ''=> new Ad20Resource($this->ad20),
            
            'ኣብ_ውሽጢ_ዝሓለፈ_6_ኣዋርሕ_ኣብ_ትኽፈሎ_ወይ_ዘይትኽፈሎ_ስራሕ_ተሳቲፍካዶ_ትፈልጥ'=> new Ad51Resource($this->ad51),
            'ኣብ_ውሽጢ_ዝሓለፈ_6_ኣዋርሕ_ካብ_ስራሕካ_ብግዝያውነት_ኣብኲርካዶ_ትፈልጥ'=> new Ad52Resource($this->ad52),
            'ብ_ውሽጢ_ዝሓለፈ_12_ኣዋርሕ_ትኽፈሎ_ወይ_ዘይትኽፈሎ_ስራሕ_ተሳቲፍካዶ_ትፈልጥ'=> new Ad53Resource($this->ad53),

            
            'ኩነታት_ዓይነት_ስራሕ'=> new Ad21Resource($this->ad21),
            'ሰራሕተኛ_ኣብ_ውሽጢ_ዝሓለፈ_6_ኣዋርሕ_ብጥረ_ገንዘብ_ዝተቐበሎ'=> new Ad22Resource($this->ad22),
            'ሰራሕተኛ_ኣብ_ውሽጢ_ዝሓለፈ_6_ኣዋርሕ_ብልግሲ_ዝተቐበሎ_እንተሎ'=> new Ad23Resource($this->ad23),

            // 'ዘይ_ተመሓለፍቲ_ሕማም'=> new  Ad13Resource($this->ad13),
                   ];
    }
}
