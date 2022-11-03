<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad27 extends Model
{
    use HasFactory;


    protected $table = 'ad27s';

    protected $fillable = [

    ];



    public function name27005()
    {
        return $this->belongsTo(Ref_63::class, 'ad27005', 'id');
    }
}
