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
}
