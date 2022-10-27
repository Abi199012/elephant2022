<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalId extends Model
{
    use HasFactory;
    protected $table = 'personal_ids';
    protected $fillable = [
        'personal_id',
        'family_id',
        'f_name_personal',
        'm_name_personal',
        'l_name_personal',
    ];
    // public function familyid()
    // {
    //     return $this->belongsTo(FamilyId::class, 'family_id', 'family_id');
    // }

    public function ssnids()
    {
        return $this->hasOne(SsnData::class, 'personal_id', 'personal_id');
    }  
    
    public function ad04()
    {
        return $this->hasOne(Ad04::class, 'personal_id', 'personal_id');
    }
    public function ad06()
    {
        return $this->hasOne(Ad06::class, 'personal_id', 'personal_id');
    }
    public function ad07()
    {
        return $this->hasOne(Ad07::class, 'personal_id', 'personal_id');
    }
    public function ad09()
    {
        return $this->hasOne(Ad09::class, 'personal_id', 'personal_id');
    }
    public function ad10()
    {
        return $this->hasOne(Ad10::class, 'personal_id', 'personal_id');
    }
 
}
