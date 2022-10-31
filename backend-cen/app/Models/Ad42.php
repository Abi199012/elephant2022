<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad42 extends Model
{
    use HasFactory;
    protected $table = 'ad42s';

    protected $fillable = [
        
        'ad42002',
   
    ];
    
//
    public function name42002()
    {
        return $this->belongsTo(Ref_24::class, 'ad42002', 'id');
    }
}
