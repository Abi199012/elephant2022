<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad36 extends Model
{
    use HasFactory;
                     public function name36005()
    {
        return $this->belongsTo(Ref_11::class, 'ad36005', 'id');
    }

                        public function name36006()
    {
        return $this->belongsTo(Ref_08::class, 'ad36006', 'id');
    }

                          public function name36009()
    {
        return $this->belongsTo(Ref_62::class, 'ad36009', 'id');
    }

                           public function name36010()
    {
        return $this->belongsTo(Ref_27::class, 'ad36010', 'id');
    }
}
