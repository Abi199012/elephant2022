<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ad12 extends Model
{
    use HasFactory;

    protected $table = 'ad12s';
    protected $fillable = [
        'persona_id',
        'ad12002',
    ];



    
    // public function ad12kkk()
    // {
    //     return $this->belongsTo(PersonalId::class, 'persona_id', 'personal_id');
    // }

}



