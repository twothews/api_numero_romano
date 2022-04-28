<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palavra extends Model
{
    use HasFactory;

    protected $fillable = ['text', "number", "value"];
}
