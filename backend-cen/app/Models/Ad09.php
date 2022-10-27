<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad09 extends Model
{
    use HasFactory;

    protected $table = 'ad09s';
    protected $fillable = [
        'personal_id',
        'ad09002',
    ];


    /**
     * Get the ad09 associated with the Ad09
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ad09()
    {
        return $this->belongsTo(PersonalId::class, 'personal_id');
    }
}
