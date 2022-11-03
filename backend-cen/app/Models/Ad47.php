<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad47 extends Model
{
    use HasFactory;
    public function name47002()
    {
        return $this->belongsTo(Ref_27::class, 'ad47002', 'id');
    }
}
