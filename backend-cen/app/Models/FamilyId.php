<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyId extends Model
{
    use HasFactory;
    protected $table = 'family_ids';
    protected $fillable = [
        'family_id',
        'f_name_head',
        'm_name_head',
        'l_name_head',
    ];

    /**
     * Get the familyid that owns the FamilyId
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     /**
      * Get all of the personalid for the FamilyId
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasMany
      */
     public function personalids()
     {
         return $this->hasMany(PersonalId::class, 'family_id', 'family_id');
     }

     public function ad01s()
     {
         return $this->hasOne(Ad01::class, 'family_id', 'family_id');
     }
     public function ad08s()
     {
         return $this->hasOne(Ad08::class, 'family_id', 'family_id');
     }
     //ቀዋምን_ዘይቀዋምን_ንብረት
     public function ad24s()
     {
         return $this->hasMany(Ad24::class, 'family_id', 'family_id');
     }
     //እዛ_ስድራቤት_እትውንነን_ጥሪት_ኣለዋ_ዶ
     public function ad25()
     {
         return $this->hasOne(Ad25::class, 'family_id', 'family_id');
     }
     //ዋንነት_ጥሪት
     public function ad26s()
     {
         return $this->hasMany(Ad26::class, 'family_id', 'family_id');
     }
     //መሸጣ_ጥሪት
     public function ad27s()
     {
         return $this->hasMany(Ad27::class, 'family_id', 'family_id');
     }
     //ዓይነት_ውጽኢት_እንስሳ
     public function ad28s()
     {
         return $this->hasMany(Ad28::class, 'family_id', 'family_id');
     }
     //እዛ_ስድራቤት_ኣብ_ፍርያት_ዘራአቲ_ትነጥፍ_ዶ
     public function ad29()
     {
         return $this->hasOne(Ad29::class, 'family_id', 'family_id');
     }
     //ዓይነት_ዘራእቲ
     public function ad30s()
     {
         return $this->hasMany(Ad30::class, 'family_id', 'family_id');
     }

         //ስድራቤትካ_ኣብ_ምግፋፍ_ዓሳ_ትነጥፍዶ
         public function ad45()
         {
             return $this->hasOne(Ad45::class, 'family_id', 'family_id');
         }
     //ዓይነት_ዓሳ
     public function ad31s()
     {
         return $this->hasMany(Ad31::class, 'family_id', 'family_id');
     }

           //ስድራቤትካ_ምስ_ኣግራብ_ዝተኣሳሰር_ትነጥፍዶ
           public function ad46()
           {
               return $this->hasOne(Ad46::class, 'family_id', 'family_id');
           }
     //ዓይነት_ገረብ
     public function ad32s()
     {
         return $this->hasMany(Ad32::class, 'family_id', 'family_id');
     }

     
           //ስድራቤትካ_ሕርሻዊ_ንጥፈታት_ዝተኣሳሰር_ትነጥፍዶ
           public function ad47()
           {
               return $this->hasOne(Ad47::class, 'family_id', 'family_id');
           }
       
     //ሕርሻዊ
     public function ad33s()
     {
         return $this->hasMany(Ad33::class, 'family_id', 'family_id');
     }

         //ስድራቤትካ_ዘይሕርሻዊ_ንጥፈታት_ዝተኣሳሰር_ትነጥፍዶ
         public function ad48()
         {
             return $this->hasOne(Ad48::class, 'family_id', 'family_id');
         }
     //ዘይሕርሻዊ
     public function ad34s()
     {
         return $this->hasMany(Ad34::class, 'family_id', 'family_id');
     }
     //ካልእ_ኣታዊታት
     public function ad35s()
     {
         return $this->hasMany(Ad35::class, 'family_id', 'family_id');
     }

         //ካብ_ኣባል_ስድራ_ኣብ_ውሽጢ_ሓደ_ዓመት_ዝሞተ_ኣሎድዩ
         public function ad49()
         {
             return $this->hasOne(Ad49::class, 'family_id', 'family_id');
         }
     //ሞት
     public function ad36s()
     {
         return $this->hasMany(Ad36::class, 'family_id', 'family_id');
     }

        //ካብ_ኣባል_ስድራ_ናብ_ወጻኢ_ሃገር_ዝከደ_ኣሎድዩ
        public function ad50()
        {
            return $this->hasOne(Ad50::class, 'family_id', 'family_id');
        }
     //ፍልሰት
     public function ad37s()
     {
         return $this->hasMany(Ad37::class, 'family_id', 'family_id');
     }
     //መስርሒ_መግቢ_ጸዓት
     public function ad41s()
     {
         return $this->hasMany(Ad41::class, 'family_id', 'family_id');
     }
     //ምንጪ_መብራህቲ
     public function ad42s()
     {
         return $this->hasMany(Ad42::class, 'family_id', 'family_id');
     }
     //ምንጪ_ሓበሬታ
     public function ad43s()
     {
         return $this->hasMany(Ad43::class, 'family_id', 'family_id');
     }
 
}
