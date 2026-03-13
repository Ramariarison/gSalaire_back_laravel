<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'nom',
        'salaire'
    ];

    protected $appends = ['observation'];

    public function getObservationAttribute()
    {
        if ($this->salaire < 1000) {
            return "mediocre";
        }

        if ($this->salaire <= 5000) {
            return "moyen";
        }

        return "grand";
    }
}
