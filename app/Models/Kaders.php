<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaders extends Model
{
    use HasFactory;
    protected $table = 'kaders';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function balita()
    {
        return $this->hasMany(Balitas::class, 'kader_id_balita', 'id');
    }


    public function bumil()
    {
        return $this->hasMany(Bumils::class, 'kader_id_bumil', 'id');
    }

}
