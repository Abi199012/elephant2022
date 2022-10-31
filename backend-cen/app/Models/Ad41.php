<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad41 extends Model
{
    use HasFactory;
    protected $table = 'ad41s';

    protected $fillable = [
        
        'ad41002',
   
    ];
    
//
    public function name41002()
    {
        return $this->belongsTo(Ref_25::class, 'ad41002', 'id');
    }
}
