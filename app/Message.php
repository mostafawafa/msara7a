<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    public function owner(){
     return   $this->belongsTo(User::class,'user_id');
    }
 public function sender(){
    return  $this->belongsTo(User::class,'sender_id');
 }

 public function response(){
     return $this->hasOne(Response::class);
 }
}
