<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function poly() {
        return $this->hasOne(Poly::class, 'id_poly', 'id_poly');
    }
}
