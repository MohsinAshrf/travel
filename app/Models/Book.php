<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BookController;

class Book extends Model
{
    use HasFactory;

protected $fillable = ['name', 'cnic', 'contact_no', 'address', 'age', 'city'];

}
