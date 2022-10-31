<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad06 extends Model
{
    use HasFactory;
    protected $table = 'ad06s';

    protected $fillable = [
        'personal_id',
        'ad06002',
        'ad06003',
    ];
    

    public function name06002()
    {
        return $this->belongsTo(Ref_13::class, 'ad06002', 'id');
    }
}
