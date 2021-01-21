<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icone extends Model
{
    use HasFactory;
    public function services()
    {

        return $this->hasMany(Service::class, "icone_id");
    }


    public function servicesprime()
    {

        return $this->hasMany(Servicesprime::class, "icone_id");
    }
   
}
