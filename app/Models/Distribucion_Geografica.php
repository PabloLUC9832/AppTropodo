<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Distribucion_Geografica extends Model
{
    use HasFactory;
    protected $guarded = [];
    /*
    public function artropodos() : BelongsTo
    {
        return $this->belongsTo(Artropodo::class);
    }
    */
}
