<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organiser extends Model
{
    //
     //Table Name
     protected $table ="organisers";
     //Primary Key
     public $primaryKey='id';
    //Timestamp
    public $timestamp =true;
}
