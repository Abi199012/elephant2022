<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad53 extends Model
{
    use HasFactory;
            //ኣብ_ውሽጢ_6_ወርሒ_ካብ_ስራሕካ_ብግዝያውነት_ኣብኲርካዶ_ትፈልጥ_id
            public function name53002()
            {
                return $this->belongsTo(Ref_27::class, 'ad53002', 'id');
            }
}
