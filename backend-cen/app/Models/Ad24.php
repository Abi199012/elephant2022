<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad24 extends Model
{
    use HasFactory;
    protected $table = 'ad24s';

    protected $fillable = [
        
        'ad24002',
   
    ];
    
//ዓይነት_ገዛ_id
    public function name24002()
    {
        return $this->belongsTo(Ref_38::class, 'ad24002', 'id');
    }
}
