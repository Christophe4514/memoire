<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    public function maison(){
        return $this->belongsTo(Maison::class, 'maison_id', 'id');
    }
}
