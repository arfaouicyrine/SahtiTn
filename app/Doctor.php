<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table ='doctor' ;
    protected $primaryKey = 'id';
    protected $fillable =[
         'user_id' ,
        'doctorName' ,
        'department_id' ,
         'educations' ,
        'consultation_fee' ,
        'location_id',
        'address' ,
        'mobileNo' ,



    ];

   public function department(){
       return $this->belongsTo(Department::class);
   }

   public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function scheduling_setting()
    {
        return $this->hasOne(SchedulingSetting::class);
    }
    public function locations()
    {
        return $this->belongsTo(Location::class);
    }




}

