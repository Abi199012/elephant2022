<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad40 extends Model
{
    use HasFactory;
    protected $table = 'ad40s';

    protected $fillable = [
        'personal_id',
        'ad40002',
    ];
    

    public function name40002()
    {
        return $this->belongsTo(Ref_15::class, 'ad40002', 'id');
    }
}
