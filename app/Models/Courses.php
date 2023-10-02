<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
   // protected  $table = 'courses';
    protected $fillable = [
        'description'
        , 'price'
        , 'name'
        ,'ended_at'
        ,'category'
        ,'photo'
        ,'status'
        ,'started_at'
        ,'youtubelink'
    ];

//    protected function asDateTime($courses)
//    {
//        return parent::asDateTime($courses)->format('y');
//    }



    public function namecategory()
    {
       return $this->belongsTo(Category::class,'category','id');
    }
}
