<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';
    protected $fillable = array(
        'title',


    );


    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the users for the location.
     *
     * @return relation
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }



}
