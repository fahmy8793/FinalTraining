<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{

    protected $table = 'booking';

    protected $fillable = ['name', 'status'];
    use HasFactory;
}



