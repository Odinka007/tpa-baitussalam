<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    public function nilai()
{
    return $this->hasMany(Nilai::class);
}

public function kelas()
{
    return $this->belongsToMany(Kelas::class, 'kelas_mata_pelajaran', 'mata_pelajaran_id', 'kelas_id');
}


}
