<?php

namespace App\Models;

use App\Domin\Aqar\Models\Aqar;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function aqar(){
        return $this->belongsTo(Aqar::class);
    }
}
