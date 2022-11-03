<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad33 extends Model
{
    use HasFactory;
             public function name33005()
    {
        return $this->belongsTo(Ref_63::class, 'ad33005', 'id');
    }
}
