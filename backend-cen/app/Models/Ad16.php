<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad16 extends Model
{
    use HasFactory;
    protected $table = 'ad16s';
    protected $fillable = [
        'personal_id',
        'ad16002',
        'ad16003',
    ];
}
