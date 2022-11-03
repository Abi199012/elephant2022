<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad13 extends Model
{
    use HasFactory;

    protected $table = 'ad13s';
    protected $fillable = [
        'personal_id',
        'ad13002'
    ];

    public function ref67()
    {
        return $this->belongsTo(Ref_67::class, 'ad13002', 'id');
    }

                      public function name13002()
    {
        return $this->belongsTo(Ref_67::class, 'ad13002', 'id');
    }

}
