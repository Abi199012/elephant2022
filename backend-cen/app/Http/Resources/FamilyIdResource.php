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
          
            'ኣድራሻ'=>new Ad01Resource($this->ad01s),
            'መንበርን_ቀረባትን'=>new Ad08Resource($this->ad08s),

            'ቀዋምን_ዘይቀዋምን_ንብረት'=>Ad24Resource::collection($this->ad24s),
            'መስርሒ_መግቢ_ጸዓት'=>Ad41Resource::collection($this->ad41s),
            'ምንጪ_መብራህቲ'=>Ad42Resource::collection($this->ad42s),
            'ምንጪ_ሓበሬታ'=>Ad43Resource::collection($this->ad43s),
            'እዛ_ስድራቤት_እትውንነን_ጥሪት_ኣለዋ_ዶ'=>new Ad25Resource($this->ad25),
            'ጥሪት'=>Ad26Resource::collection($this->ad26s),
            'ጥሪት_መሸጣ'=>Ad27Resource::collection($this->ad27s),
            'ዓይነት_ውጽኢት_እንስሳ'=>Ad28Resource::collection($this->ad28s),

            'እዛ_ስድራቤት_ኣብ_ፍርያት_ዘራአቲ_ትነጥፍ_ዶ'=>new Ad29Resource($this->ad29),
            'ዓይነት_ዘራእቲ'=>Ad30Resource::collection($this->ad30s),

            'ስድራቤትካ_ኣብ_ምግፋፍ_ዓሳ_ትነጥፍዶ'=>new Ad45Resource($this->ad45),
            'ዓይነት_ዓሳ'=>Ad31Resource::collection($this->ad31s),

    
           
            'ስድራቤትካ_ምስ_ኣግራብ_ዝተኣሳሰር_ትነጥፍዶ'=>new Ad46Resource($this->ad46),
            'ዓይነት_ገረብ'=>Ad32Resource::collection($this->ad32s),

            'ስድራቤትካ_ሕርሻዊ_ንጥፈታት_ዝተኣሳሰር_ትነጥፍዶ'=>new Ad47Resource($this->ad47),
            'ሕርሻዊ'=>Ad33Resource::collection($this->ad33s),

            'ስድራቤትካ_ዘይሕርሻዊ_ንጥፈታት_ዝተኣሳሰር_ትነጥፍዶ'=>new Ad48Resource($this->ad48),
            'ዘይሕርሻዊ'=>Ad34Resource::collection($this->ad34s),

            'ካልእ_ኣታዊታት'=>Ad35Resource::collection($this->ad35s),

            'ካብ_ኣባል_ስድራ_ኣብ_ውሽጢ_ሓደ_ዓመት_ዝሞተ_ኣሎድዩ'=>new Ad49Resource($this->ad49),
            'ሞት'=>Ad36Resource::collection($this->ad36s),

            'ካብ_ኣባል_ስድራ_ናብ_ወጻኢ_ሃገር_ዝከደ_ኣሎድዩ'=>new Ad50Resource($this->ad50),
            'ፍልሰት'=>Ad37Resource::collection($this->ad37s),
         

            'family_members'=>PersonalIdResource::collection($this->personalids),

        ];
    }
}


// 're03005' => Re04Resource::collection($this->kebabi),