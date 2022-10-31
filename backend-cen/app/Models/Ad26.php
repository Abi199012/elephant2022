<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad26 extends Model
{
    use HasFactory;
    protected $table = 'ad26s';

    protected $fillable = [
        
        'ad26002',
   
    ];
    
//
    public function name26010()
    {
        return $this->belongsTo(Ref_63::class, 'ad26010', 'id');
    }
}
