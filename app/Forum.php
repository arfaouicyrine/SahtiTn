<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{

      protected $guarded =[] ;
      protected $table ='forums' ;
      protected $fillable =[
        'id',
        'slug',
        'title',
        'user_id',
        'content',
        'department_id', ] ;
 /**
     * The users that belong to the service.
     *
     * @return relation
     */
    public function users()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function reponse()
    {
        return $this->hasMany(Reponse::class);
    }

    public function getRouteKeyName()
    {
        return 'slug' ;
    }

   // /*public function scopeLatest($query)
    //{
   //     return $query->orderBy('created_at' , 'DESC');
   // }*/
}
