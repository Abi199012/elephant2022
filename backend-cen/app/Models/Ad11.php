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
