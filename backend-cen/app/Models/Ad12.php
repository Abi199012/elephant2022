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



                   public function name12002()
    {
        return $this->belongsTo(Ref_66::class, 'ad12002', 'id');
    }

}



