<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    use HasFactory;
    protected $fillable = ['id', 'name', 'address', 'description', 'price', 'propetyspec', 'image_path', 'image_urls', 'is_favorite'];

    protected $casts = [
        'propetyspec' => 'array',
        'image_urls' => 'array',
        'is_favorite' => 'boolean',
    ];
}
