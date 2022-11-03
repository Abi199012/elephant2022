<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad31 extends Model
{
    use HasFactory;
         public function name31009()
    {
        return $this->belongsTo(Ref_63::class, 'ad31009', 'id');
    }
}
