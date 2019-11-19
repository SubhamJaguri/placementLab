<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //Table Name
    protected $table= 'posts';
    //primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps= true;

    //this function is to add a many to one relationship between post and user model
    public function user(){
        return $this->belongsTo('App\User');
    }

}
