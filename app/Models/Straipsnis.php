<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Straipsnis extends Model
{
    use HasFactory;

    public function Rubrika()
    {
        return $this->belongsTo(Rubrika::class);
    }
}
