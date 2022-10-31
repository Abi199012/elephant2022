<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad07 extends Model
{
    use HasFactory;
    protected $table = 'ad07s';

    protected $fillable = [
        'personal_id',
        'ad07002',
        'ad07003',
        'ad07004',
        'ad07005',
        'ad07006',
        'ad07007',
        'ad07008',
        'ad07009',
    ];
    

    public function name07002()
    {
        return $this->belongsTo(Ref_64::class, 'ad07002', 'id');
    }
    public function name07003()
    {
        return $this->belongsTo(Ref_65::class, 'ad07003', 'id');
    }
}
