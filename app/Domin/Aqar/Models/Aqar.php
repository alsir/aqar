<?php

namespace App\Domin\Aqar\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aqar extends Model
{
    /** @use HasFactory<\Database\Factories\AqarFactory> */
    use HasFactory;
    public function photos(){
        return $this->hasMany(Photo::class);
    }
}
