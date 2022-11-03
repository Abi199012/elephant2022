<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad19 extends Model
{
    use HasFactory;

    
         //ገምጋም_ወርሓዊ_እቶት_id
    public function name19004()
    {
        return $this->belongsTo(Ref_43::class, 'ad19004', 'id');
    }
}
