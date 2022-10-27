<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_06 extends Model
{
    use HasFactory;
    protected $table = 'ref_06s';
    protected $fillable = [
        'ref_06002',
        'ref_06003',
        'ref_06004',
    ];

    public function village(){
        return $this->belongsTo(Ref_05::class, 'ref_06004', 'id'); 
    }
}
