<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poly extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_poly';

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }
}
