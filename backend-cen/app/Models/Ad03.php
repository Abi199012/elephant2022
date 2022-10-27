<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad03 extends Model
{
    use HasFactory;

    protected $table = 'ad03s';

    protected $fillable = [
        'residence_id',
        'ad03002',
        'ad03003',
        'ad03004',
        'ad03005',
        'ad03006',
    ];

    /**
     * Get the ad03 that owns the Ad03
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function ad03()
    // {
    //     return $this->belongsTo(Ad02::class, 'residence_id', 'id');
    // }
}
