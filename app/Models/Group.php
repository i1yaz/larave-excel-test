<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'jos_user_usergroup_map';


    public function subscriber(){
        return $this->belongsToMany(Subscriber::class,'user_id');
    }
}
