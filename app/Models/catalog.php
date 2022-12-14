<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'imgsource',
        'price',
        'publisher',
        'stock',
        'datadrop',
        'antagonist',
        'category',
    ];
}
