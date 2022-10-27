<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnumLocation extends Model
{
    use HasFactory;

    protected $table = 'enum_locations';
    protected $fillable = [
        'zoba_id',
        'sub_zoba_id',
        'town_id',
        'kebabi_id',
        'Village_id',
        'enum_area_id',
    ];

    public function zoba()
    {
        return $this->belongsTo(Ref_01::class, 'zoba_id', 'id');
    }

    public function subzoba(){
        return $this->belongsTo(Ref_02::class, 'sub_zoba_id', 'id'); 
    }

    public function town(){
        return $this->belongsTo(Ref_03::class, 'town_id', 'id'); 
    }
    public function kebabi(){
        return $this->belongsTo(Ref_04::class, 'kebabi_id', 'id'); 
    }
    public function village(){
        return $this->belongsTo(Ref_05::class, 'Village_id', 'id'); 
    } 
    public function enumarea(){
        return $this->belongsTo(Ref_06::class, 'enum_area_id', 'id'); 
    }


}
