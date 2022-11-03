<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad15 extends Model
{
    use HasFactory;
    protected $table = 'ad15s';
    protected $fillable = [
        'personal_id',
        'ad15002'
    ];
                                public function name15002()
    {
        return $this->belongsTo(Ref_33::class, 'ad15002', 'id');
    }
}
