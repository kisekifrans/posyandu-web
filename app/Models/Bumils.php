<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumils extends Model
{
    use HasFactory;
    protected $table = 'bumils';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function bumilsKader()
    {
        return $this->belongsTo(Kaders::class, 'kader_id_bumil', 'id');
    }
}
