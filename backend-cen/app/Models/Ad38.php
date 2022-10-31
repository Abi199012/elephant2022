<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad38 extends Model
{
    use HasFactory;
    protected $table = 'ad38s';

    protected $fillable = [
        'personal_id',
        'ad38002',
    ];
    

    public function name38002()
    {
        return $this->belongsTo(Ref_17::class, 'ad38002', 'id');
    }
}
