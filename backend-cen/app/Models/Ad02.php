<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad02 extends Model
{
    use HasFactory;
    protected $table = 'ad02s';
    protected $fillable = [
        'family_id',
        'area_id',
        'ad02002',
        'ad02003',
        'ad02004',
        'ad02005',
    ];

    /**
     * Get the ad02 that owns the Ad02
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ad02()
    {
        return $this->belongsTo(Ad01::class, 'area_id', 'id');
    }

    public function ad03s()
    {
        return $this->hasOne(Ad03::class, 'residence_id', 'id');
    }

    public function name02002()
    {
        return $this->belongsTo(Ref_07::class, 'ad02002', 'id');
    }
}
