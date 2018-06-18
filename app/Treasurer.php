<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treasurer extends Model
{
    //
     //Table Name
     protected $table ="treasurers";
     //Primary Key
     public $primaryKey='id';
    //Timestamp
    public $timestamp =true;
}
