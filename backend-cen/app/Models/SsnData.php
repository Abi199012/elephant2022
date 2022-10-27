<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SsnData extends Model
{
    use HasFactory;

    protected $table = 'ssn_data';

    protected $fillable = [
        'id',
        'personal_id',
        'ssn_data',
    ];

    // public function ssn_id()
    // {
    //     return $this->belongsTo(PersonalId::class, 'personal_id', 'personal_id');
    // }

    public function ssn()
    {
        return $this->belongsTo(PersonalId::class, 'personal_id', 'personal_id');
    }
}
