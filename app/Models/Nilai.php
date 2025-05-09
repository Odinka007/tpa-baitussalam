<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = ['santri_id', 'matapelajaran_id', 'nilai'];

    public function santri()
{
    return $this->belongsTo(Datasantri::class, 'santri_id');
}

public function matapelajaran()
{
    return $this->belongsTo(Matapelajaran::class);
}

}
