<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad25 extends Model
{
    use HasFactory;
    protected $table = 'ad25s';

    protected $fillable = [
        
        'ad25002',
   
    ];
    
//
    public function name25002()
    {
        return $this->belongsTo(Ref_47::class, 'ad25002', 'id');
    }
}
