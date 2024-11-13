<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customization extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'favicon',
        'primary_color',
        'secondary_color',
        'third_color',
    ];
}
