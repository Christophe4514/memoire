<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{
    use HasFactory;

    public function monitorings(){
        return $this->hasMany(Monitoring::class, 'maison_id','id');
    }
}
