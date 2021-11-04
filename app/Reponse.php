<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{     protected $table = 'reponses';
    protected $guarded= [];
     protected $fillable = [
         'user_id',
         'forum_id' ,
         'reponse',
     ];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
