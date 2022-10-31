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


    public function name01002()
    {
        return $this->belongsTo(Ref_01::class, 'ad01002', 'id');
    }
    public function name01003()
    {
        return $this->belongsTo(Ref_02::class, 'ad01003', 'id');
    }
    public function name01004()
    {
        return $this->belongsTo(Ref_03::class, 'ad01004', 'id');
    }

    public function name01005()
    {
        return $this->belongsTo(Ref_04::class, 'ad01005', 'id');
    }
    public function name01006()
    {
        return $this->belongsTo(Ref_05::class, 'ad01006', 'id');
    }
    public function name01007()
    {
        return $this->belongsTo(Ref_06::class, 'ad01007', 'id');
    }
}
