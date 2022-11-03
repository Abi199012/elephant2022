<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad28 extends Model
{
    use HasFactory;


    public function name28009()
    {
        return $this->belongsTo(Ref_63::class, 'ad28009', 'id');
    }
}
