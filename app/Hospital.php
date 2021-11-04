<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospitals';
    protected $fillable =[
        'name',
        'location_id',
        'address',
        'description',
        'image'] ;






}
