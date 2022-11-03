<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad49 extends Model
{
    use HasFactory;
    public function name49002()
    {
        return $this->belongsTo(Ref_27::class, 'ad49002', 'id');
    }
}
