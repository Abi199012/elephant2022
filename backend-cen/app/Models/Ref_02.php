<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_02 extends Model
{
    use HasFactory;
    protected $table = 'ref_02s';
    protected $fillable = [
        'ref_02002',
        'ref_02003',
        'ref_02004',
    ];

 
    public function zoba()
    {
        return $this->belongsTo(Ref_01::class, 'ref_02004', 'id');
    }
}
