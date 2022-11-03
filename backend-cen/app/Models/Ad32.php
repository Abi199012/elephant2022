<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad32 extends Model
{
    use HasFactory;
         public function name32009()
    {
        return $this->belongsTo(Ref_63::class, 'ad32009', 'id');
    }
}
