<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicesprime extends Model
{
    use HasFactory;
    public function icone()
    {
        return $this->belongsTo(Icone::class, "icone_id", "id");
    }
}
