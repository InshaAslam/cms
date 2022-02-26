<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactnumber extends Model
{
    use HasFactory;
    protected $table='contactnumbers';

    public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }
}
