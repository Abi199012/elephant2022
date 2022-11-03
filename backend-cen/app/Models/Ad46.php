<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad46 extends Model
{
    use HasFactory;
    public function name46002()
    {
        return $this->belongsTo(Ref_27::class, 'ad46002', 'id');
    }
}
