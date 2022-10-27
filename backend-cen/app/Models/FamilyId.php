<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyId extends Model
{
    use HasFactory;
    protected $table = 'family_ids';
    protected $fillable = [
        'family_id',
        'f_name_head',
        'm_name_head',
        'l_name_head',
    ];

    /**
     * Get the familyid that owns the FamilyId
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     /**
      * Get all of the personalid for the FamilyId
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasMany
      */
     public function personalids()
     {
         return $this->hasMany(PersonalId::class, 'family_id', 'family_id');
     }

     public function ad01s()
     {
         return $this->hasOne(Ad01::class, 'family_id', 'family_id');
     }
     public function ad08s()
     {
         return $this->hasOne(Ad08::class, 'family_id', 'family_id');
     }
 
}
