<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    //
     //Table Name
     protected $table ="presidents";
     //Primary Key
     public $primaryKey='id';
    //Timestamp
    public $timestamp =true;
}
