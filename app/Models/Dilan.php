<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dilan extends Model
{
    use HasFactory;

    protected $fillable = [
        'frist name',
        'address',
        'tp'
    ];
}
