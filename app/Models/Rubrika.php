<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrika extends Model
{
    use HasFactory;

    protected $fillable = ['pavadinimas', 'aprasymas', 'nuoroda'];

    /**
     * Gauna visus rubrikos straipsnius
     */
    public function straipsniai()
    {
        return $this->hasMany(Straipsnis::class, 'rid');
    }
}
