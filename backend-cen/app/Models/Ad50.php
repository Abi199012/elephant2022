<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad50 extends Model
{
    use HasFactory;
    public function name50002()
    {
        return $this->belongsTo(Ref_27::class, 'ad50002', 'id');
    }
}
