<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

//    protected $fillable = [
//        'Name',
//        'Email',
//        'password',
//        'Emplyee Id',
//        'status',
//        'role_id',
         protected $fillable = ['name', 'email', 'subject' , 'message'];


    ];

    protected $hidden = [
        'password',
    ];

}
