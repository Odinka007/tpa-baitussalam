<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{

    public function santri()
{
    return $this->hasMany(Datasantri::class, 'kelas_id');
}

    public function mataPelajarans()
{
    return $this->hasMany(Matapelajaran::class);
}


}



