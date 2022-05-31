<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balitas extends Model
{
    use HasFactory;
    protected $table = 'balitas';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function balitasKader()
    {
        return $this->belongsTo(Kaders::class, 'kader_id_balita', 'id');
    }
}
