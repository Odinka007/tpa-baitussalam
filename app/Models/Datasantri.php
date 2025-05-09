<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datasantri extends Model
{
    public function kelas()
{
    return $this->belongsTo(Kelas::class, 'kelas_id');
}

public function nilai()
{
    return $this->hasMany(Nilai::class, 'santri_id');
    return $this->hasMany(Nilai::class); 
}

}
