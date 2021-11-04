<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{  protected $guarded = [] ;
  protected $table ='department' ;
  protected $fillable =['name','description'];



   public function doctor(){
        return $this->hasMany(Doctor::class , 'department_id');
    }

      public function article()
    {
        return $this->belongsToMany('App\Article')->withPivot('article_id');
    }

    public function forums()
    {
        return $this->hasMany(Forum::class);

    }
}
