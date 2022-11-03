<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad44 extends Model
{
    use HasFactory;
                              public function name44002()
    {
        return $this->belongsTo(Ref_32::class, 'ad44002', 'id');
    }
}
