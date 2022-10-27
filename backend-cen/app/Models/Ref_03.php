<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_03 extends Model
{
    use HasFactory;
    protected $table = 'ref_03s';
    protected $fillable = [
        'ref_03002',
        'ref_03003',
        'ref_03004',
    ];

    // public function subzoba(){
    //     return $this->belongsTo(Ref_02::class, 'ref_03004', 'id'); 
    // }
}
