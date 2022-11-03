<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad29 extends Model
{
    use HasFactory;

    public function name29002()
    {
        return $this->belongsTo(Ref_27::class, 'ad29002', 'id');
    }
}
