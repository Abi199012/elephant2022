<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad18 extends Model
{
    use HasFactory;

             //ኩነታት_ስራሕ_id
    public function name18002()
    {
        return $this->belongsTo(Ref_39::class, 'ad18002', 'id');
    }
             //ምንጪ_ኣታዊ_id
    public function name18003()
    {
        return $this->belongsTo(Ref_42::class, 'ad18003', 'id');
    }
}
