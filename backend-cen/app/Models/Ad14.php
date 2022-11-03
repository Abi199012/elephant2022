<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad14 extends Model
{
    use HasFactory;
    protected $table = 'ad14s';
    protected $fillable = [
        'personal_id',
        'ad14002'
    ];

                          public function name14002()
    {
        return $this->belongsTo(Ref_31::class, 'ad14002', 'id');
    }
}
