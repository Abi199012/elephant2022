<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_01 extends Model
{
    use HasFactory;
    protected $table = 'ref_01s';
    protected $fillable = [
        'ref_01002',
        'ref_01003',
    ];
  
}
