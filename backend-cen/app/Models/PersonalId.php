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
    public function ad11()
    {
        return $this->hasOne(Ad11::class, 'personal_id', 'personal_id');
    }

    //ተመሓላለፍቲ ሕማም
    public function ad12s()
    {
        return $this->hasMany(Ad12::class, 'personal_id', 'personal_id');
    }
    //ዘይ-ተመሓላለፍቲ ሕማም
    public function ad13s()
    {
        return $this->hasMany(Ad13::class, 'personal_id', 'personal_id');
    } 
    //ዓይነት_ስንክልና
    public function ad14s()
    {
        return $this->hasMany(Ad14::class, 'personal_id', 'personal_id');
    }
    //ምኽንያት_ስንክልና
    public function ad44s()
    {
        return $this->hasMany(Ad44::class, 'personal_id', 'personal_id');
    }
    //ዓይነት_ደም
    public function ad15()
    {
        return $this->hasOne(Ad15::class, 'personal_id', 'personal_id');
    }
    //ደረጃ_ትምህርቲ
    public function ad16()
    {
        return $this->hasOne(Ad16::class, 'personal_id', 'personal_id');
    }
    ////ሞያ
    public function ad17s()
    {
        return $this->hasMany(Ad17::class, 'personal_id', 'personal_id');
    }
    //ሞያ
    public function ad18()
    {
        return $this->hasOne(Ad18::class, 'personal_id', 'personal_id');
    }
    //ሰራሕተኛ
    public function ad19()
    {
        return $this->hasOne(Ad19::class, 'personal_id', 'personal_id');
    } 
    //ኣባላት_ዕድመ_ልዕሊ_10_ዝኾኑ_ይሕተት
    public function ad20()
    {
        return $this->hasOne(Ad20::class, 'personal_id', 'personal_id');
    }
    //ad51
    public function ad51()
    {
        return $this->hasOne(Ad51::class, 'personal_id', 'personal_id');
    }
    //ad52
    public function ad52()
    {
        return $this->hasOne(Ad52::class, 'personal_id', 'personal_id');
    }
    //ad53
    public function ad53()
    {
        return $this->hasOne(Ad53::class, 'personal_id', 'personal_id');
    }
    //ኩነታት_ዓይነት_ስራሕ
    public function ad21()
    {
        return $this->hasOne(Ad21::class, 'personal_id', 'personal_id');
    }
    //ሰራሕተኛ_ኣብ_ውሽጢ_ዝሓለፈ_6_ኣዋርሕ_ብጥረ_ገንዘብ_ዝተቐበሎ
    public function ad22()
    {
        return $this->hasOne(Ad22::class, 'personal_id', 'personal_id');
    }
    //ሰራሕተኛ_ኣብ_ውሽጢ_ዝሓለፈ_6_ኣዋርሕ_ብልግሲ_ዝተቐበሎ_እንተሎ
    public function ad23()
    {
        return $this->hasOne(Ad23::class, 'personal_id', 'personal_id');
    }  
    //ቋንቋ
    public function ad38s()
    {
        return $this->hasMany(Ad38::class, 'personal_id', 'personal_id');
    }
    //ኣገልጉሎት_ዘይፈጸመ
    public function ad39()
    {
        return $this->hasOne(Ad39::class, 'personal_id', 'personal_id');
    }
    //ኣገልጉሎት_ዝፈጸመ
    public function ad40()
    {
        return $this->hasOne(Ad40::class, 'personal_id', 'personal_id');
    }
 
}
