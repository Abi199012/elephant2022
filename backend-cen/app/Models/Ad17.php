<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad17 extends Model
{
    use HasFactory;
                     public function name17002()
    {
        return $this->belongsTo(Ref_35::class, 'ad17002', 'id');
    }

                        public function name17003()
    {
        return $this->belongsTo(Ref_36::class, 'ad17003', 'id');
    }

                           public function name17005()
    {
        return $this->belongsTo(Ref_37::class, 'ad17005', 'id');
    }
}
