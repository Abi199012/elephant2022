<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad04 extends Model
{
    use HasFactory;
    protected $table = 'ad04s';
    protected $fillable = [
        'ad04002',
        'ad04003',
        'ad04004',
        'ad04005',
        'ad04006',
        'ad04007',
        'ad04008',
        'ad04009',
        'ad04010',
        'ad04011',
    ];


    public function name04002()
    {
        return $this->belongsTo(Ref_11::class, 'ad04002', 'id');
    }
    
    public function name04003()
    {
        return $this->belongsTo(Ref_08::class, 'ad04003', 'id');
    }

        
    public function name04004()
    {
        return $this->belongsTo(Ref_09::class, 'ad04004', 'id');
    }

    public function name04009()
    {
        return $this->belongsTo(Country::class, 'ad04009', 'id');
    }
}
