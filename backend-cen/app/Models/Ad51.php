<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad51 extends Model
{
    use HasFactory;
       //ኣብ_ውሽጢ_6_ወርሒ_ኣብ_ትኽፈሎ_ወይ_ዘይትኽፈሎ_ስራሕ_ተሳቲፍካዶ_ትፈልጥ_id
       public function name51002()
       {
           return $this->belongsTo(Ref_27::class, 'ad51002', 'id');
       }
}
