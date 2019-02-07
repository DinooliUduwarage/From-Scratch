<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table='posts';
     //primary key field
     public $primaryKey='id';
     //timestamps
     public $timeStamps = 'false';
     
     //creating a relationship where post have a relationship to a user,it is belongs to a user
     public function user(){    //wtevrname to function
         return $this->belongsTo('App\User');   //App\User is the model,User.php
     }
}
