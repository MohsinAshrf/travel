<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkg extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'location',
        'day',
        'content'
    ];
    public function image(): Attribute
    {
        return  Attribute::make(
            get: fn($value) => url('public/storage/' . $value)
        );
    }
}
