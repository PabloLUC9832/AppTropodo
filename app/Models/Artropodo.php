<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artropodo extends Model
{
    use HasFactory;

    protected $guarded = [];
    /*
    public function distribuciones_geograficas() : HasMany
    {
        return $this->hasMany(Distribucion_Geografica::class);
    }
    */
}
