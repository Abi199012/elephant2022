<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad08 extends Model
{
    use HasFactory;
    protected $table = 'ad08s';

    protected $fillable = [
        
        'ad08002',
        'ad08003',
        'ad08004',
        'ad08005',
        'ad08006',
        'ad08007',
        'ad08008',
        'ad08009',
        'ad08010',
    ];
    
//ዓይነት_ገዛ_id
    public function name08002()
    {
        return $this->belongsTo(Ref_18::class, 'ad08002', 'id');
    }
   // ናይ_ውልቂ_id
    public function name08004()
    {
        return $this->belongsTo(Ref_19::class, 'ad08004', 'id');
    }
//ክራይ_id
    public function name08005()
    {
        return $this->belongsTo(Ref_20::class, 'ad08005', 'id');
    }
//ባጤራ_id
    public function name08007()
    {
        return $this->belongsTo(Ref_63::class, 'ad08007', 'id');
    }

    public function name08008()
    {
        return $this->belongsTo(Ref_22::class, 'ad08008', 'id');
    }
    public function name08009()
    {
        return $this->belongsTo(Ref_21::class, 'ad08009', 'id');
    }
    public function name08010()
    {
        return $this->belongsTo(Ref_23::class, 'ad08010', 'id');
    }
}
