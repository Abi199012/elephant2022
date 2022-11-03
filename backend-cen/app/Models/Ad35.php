<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad35 extends Model
{
    use HasFactory;
                    public function name35005()
    {
        return $this->belongsTo(Ref_63::class, 'ad35005', 'id');
    }
}
