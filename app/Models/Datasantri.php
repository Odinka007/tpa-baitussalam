<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datasantri extends Model
{
    use HasFactory;

    // Menambahkan kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_santri',
        'jenis_kelamin',
        'nama_orang_tua',
        'kelas_id',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'bakat_prestasi',
    ];

    public function kelas()
{
    return $this->belongsTo(Kelas::class, 'kelas_id');
}

public function nilai()
{
    return $this->hasMany(Nilai::class, 'santri_id')->with('matapelajaran');
    // return $this->hasMany(Nilai::class); 
}

public function kepribadian()
{
    return $this->hasOne(Kepribadian::class, 'santri_id');
}


}
