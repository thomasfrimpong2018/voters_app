<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{
    //
     //Table Name
     protected $table ="secretaries";
     //Primary Key
     public $primaryKey='id';
    //Timestamp
    public $timestamp =true;
}
