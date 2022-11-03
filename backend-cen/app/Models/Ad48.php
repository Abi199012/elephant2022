<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad48 extends Model
{
    use HasFactory;
    public function name48002()
    {
        return $this->belongsTo(Ref_27::class, 'ad48002', 'id');
    }
    
}
