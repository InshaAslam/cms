<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use softDeletes;
     protected $table='contacts';

     public function users()
     {
         return $this->belongsTo(User::class);
     }

     public function contactnumber()
     {
         return $this->hasOne('App\Models\Contactnumber');
     }
}
