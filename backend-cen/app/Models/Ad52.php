<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad52 extends Model
{
    use HasFactory;
            //ኣብ_ውሽጢ_12_ወርሒ_ትኽፈሎ_ወይ_ዘይትኽፈሎ_ስራሕ_ተሳቲፍካዶ_ትፈልጥ_id
            public function name52002()
            {
                return $this->belongsTo(Ref_27::class, 'ad52002', 'id');
            }
}
