<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable=['ime','prezime','godina_rodenja','spol','korisnicko_ime','lozinka'];

}
