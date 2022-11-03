<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad21 extends Model
{
    use HasFactory;

        //ሓላፍነታዊ_ስራሕ_ወይ_ዕዮ_ኣብ_ቀንዲ_ስራሕካ_እንታዩ
    public function name21002()
    {
        return $this->belongsTo(Ref_44::class, 'ad21002', 'id');
    }
        //እንታይ_ዓይነት_እዩ_ቀንዲ_ስራሕካ
    public function name21003()
    {
        return $this->belongsTo(Ref_45::class, 'ad21003', 'id');
    }
        //ደረጃ_ስራሕካ_id
    public function name21004()
    {
        return $this->belongsTo(Ref_46::class, 'ad21004', 'id');
    }

}
