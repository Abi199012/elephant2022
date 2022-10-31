<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad39 extends Model
{
    use HasFactory;
    protected $table = 'ad39s';

    protected $fillable = [
        'personal_id',
        'ad39002',
    ];
    

    public function name39002()
    {
        return $this->belongsTo(Ref_16::class, 'ad39002', 'id');
    }
}
