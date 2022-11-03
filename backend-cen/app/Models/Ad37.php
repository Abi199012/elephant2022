<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad37 extends Model
{
    use HasFactory;
                     public function name37005()
    {
        return $this->belongsTo(Ref_11::class, 'ad37005', 'id');
    }

                        public function name37006()
    {
        return $this->belongsTo(Ref_08::class, 'ad37006', 'id');
    }

                          public function namecountry()
    {
        return $this->belongsTo(Country::class, 'ad37009', 'id');
    }
}
