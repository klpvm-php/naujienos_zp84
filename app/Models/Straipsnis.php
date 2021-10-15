<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Straipsnis extends Model
{
    use HasFactory;

    protected $fillable = ['pavadinimas', 'aprasymas', 'nuoroda', 'rid', 'paveiksliukas', 'tekstas'];

    /**
     * Gauna rubriką, kuriai priklauso straipsnis
     */
    public function Rubrika()
    {
        return $this->belongsTo(Rubrika::class);
    }
}
