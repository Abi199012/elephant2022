<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad45 extends Model
{
    use HasFactory;
    public function name45002()
    {
        return $this->belongsTo(Ref_27::class, 'ad45002', 'id');
    }
}
