<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad11 extends Model
{
    use HasFactory;
    protected $table = 'ad11s';
    protected $fillable = [
        'personal_id',
        'ad11002',
    ];

                   public function name11002()
    {
        return $this->belongsTo(Ref_28::class, 'ad11002', 'id');
    }

    /**
     * Get the ad11 that owns the Ad11
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function ad11()
    // {
    //     return $this->belongsTo(PersonalId::class, 'persona_id', 'personal_id');
    // }

}
