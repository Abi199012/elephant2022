<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ssn extends Model
{
    use HasFactory;
    protected $fillable=[
        'persone_id',
        'dob',
        'serial_id'
    ];
}
