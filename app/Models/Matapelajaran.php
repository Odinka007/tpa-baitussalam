<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matapelajaran extends Model
{
    use HasFactory;

    protected $fillable = ['kelas_id', 'nama_matapelajaran'];

    public function nilai()
{
    return $this->hasMany(Nilai::class);
}

public function kelas()
    {
        return $this->belongsTo(Kelas::class); 
    }


}
