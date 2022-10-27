<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad01 extends Model
{
    use HasFactory;

    protected $table ="ad01s";
    protected $fillable = [
        'family_id',
        'ad01002',
        'ad01003',
        'ad01004',
        'ad01005',
        'ad01006',
        'ad01007',
    ];


    /**
     * Get the ad01 that owns the Ad01
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ad01()
    {
        return $this->belongsTo(FamilyId::class, 'family_id', 'family_id');
    }

    /**
     * Get the ad02 associated with the Ad01
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ad02s()
    {
        return $this->hasOne(Ad02::class, 'area_id', 'id');
    }
}
