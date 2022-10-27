<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enumerator extends Model
{
    use HasFactory;

    protected $table = 'enumerators';
    protected $fillable = [
        'f_name',
        'm_name',
        'l_name',
        'user_name',
        'enum_area_id',
        'phone',
        'status',
        'enum_id',
    ];

    /**
     * Get the enumname that owns the Enumerator
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enumname()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}
