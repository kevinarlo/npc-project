<?php

namespace App;

use App\{Pemain, Pelatih, Gallery};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CabangOlahraga extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama_cabor'];

    protected $hidden = [];

    protected $primaryKey = 'cabang_olahraga_id';

    public function pemains()
    {
        return $this->hasMany(Pemain::class, 'cabang_olahraga_id', 'cabang_olahraga_id');
    }

    public function pelatihs()
    {
        return $this->hasMany(Pelatih::class, 'cabang_olahraga_id', 'cabang_olahraga_id');
    }
}
