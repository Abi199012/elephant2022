<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad30 extends Model
{
    use HasFactory;
        public function name30009()
    {
        return $this->belongsTo(Ref_63::class, 'ad30009', 'id');
    }
}
