<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad43 extends Model
{
    use HasFactory;
    protected $table = 'ad43s';

    protected $fillable = [
        
        'ad43002',
   
    ];
    
//
    public function name43002()
    {
        return $this->belongsTo(Ref_26::class, 'ad43002', 'id');
    }
}
