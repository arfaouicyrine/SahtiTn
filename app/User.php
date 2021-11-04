<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
         'email',
          'password',
          'role_as',
          'location_id',
           'mobileNo',
          'gender',
 ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function hasRole($roles){
        return in_array($this->role, $roles);
    }

    public function isDoctor(){
        return $this->role == 'Doctor';
    }

    public function isAdmin(){
        return $this->role == 'Admin';
    }

    public function isPatient(){
        return $this->role == 'Patient';
    }


    /**
     * Get the article associated with the user.
     *
     * @return relation
     */
    public function articles()
    {
        return $this->hasMany('App\Article', 'author_id');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function forums () {

        return $this->hasMany('App\Forum');
    }

    public function reponses() {

        return $this->hasMany(Reponse::class);
    }

    public function location () {
        return $this->hasOne('App\Location') ;
    }

    public function doctors()
    {
        return $this->hasOne(Doctor::class);
    }

}
