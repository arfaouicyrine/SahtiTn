<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $table ='article' ;
    protected $fillable = [
        'slug',
        'author_id',
        'department_id',

        'title' ,
        'description',
        'image',
        'is_featured',
        'department'];

   // * Articles can have multiple authors
     public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function department()
    {
        return $this->belongsTo(Department::class , 'department_id' , 'id');
    }
}
