<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_05 extends Model
{
    use HasFactory;
    protected $table = 'ref_05s';
    protected $fillable = [
        'ref_05002',
        'ref_05003',
        'ref_05004',
    ];

    public function kebabi(){
        return $this->belongsTo(Ref_04::class, 'ref_05004', 'id'); 
    }
}
