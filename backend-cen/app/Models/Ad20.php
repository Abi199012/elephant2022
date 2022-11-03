<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad20 extends Model
{
    use HasFactory;

    //ኣብ_ውሽጢ_6_ወርሒ_ኣብ_ትኽፈሎ_ወይ_ዘይትኽፈሎ_ስራሕ_ተሳቲፍካዶ_ትፈልጥ_id
    public function name20002()
    {
        return $this->belongsTo(Ref_27::class, 'ad20002', 'id');
    }

        //ኣብ_ውሽጢ_12_ወርሒ_ትኽፈሎ_ወይ_ዘይትኽፈሎ_ስራሕ_ተሳቲፍካዶ_ትፈልጥ_id
    public function name20003()
    {
        return $this->belongsTo(Ref_27::class, 'ad20003', 'id');
    }

        //ኣብ_ውሽጢ_6_ወርሒ_ካብ_ስራሕካ_ብግዝያውነት_ኣብኲርካዶ_ትፈልጥ_id
    public function name20004()
    {
        return $this->belongsTo(Ref_27::class, 'ad20004', 'id');
    }
}
