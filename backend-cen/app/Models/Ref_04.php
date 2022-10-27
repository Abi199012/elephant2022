<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ref_04 extends Model
{
    use HasFactory;
    protected $table = 'ref_04s';
    protected $fillable = [
        'ref_04002',
        'ref_04003',
        'ref_04004',
    ];
    

    public function subzone(){
        return $this->belongsTo(Ref_02::class, 'ref_04004', 'id'); 
    }
}
