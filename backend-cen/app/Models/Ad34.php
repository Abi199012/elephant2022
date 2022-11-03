<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad34 extends Model
{
    use HasFactory;
                 public function name34009()
    {
        return $this->belongsTo(Ref_63::class, 'ad34009', 'id');
    }
}
