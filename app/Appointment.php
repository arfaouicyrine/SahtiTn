<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
  protected $table ='appointment' ;
  protected $fillable = [
      'doctor_id',
        'description'
  ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
