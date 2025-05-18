<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kepribadian extends Model
{
     protected $table = 'kepribadian';

    protected $fillable = [
        'santri_id', 'sikap', 'kerajinan', 'purgita',
    ];

    public function santri()
    {
        return $this->belongsTo(Datasantri::class, 'santri_id');
    }
}
