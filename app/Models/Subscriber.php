<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table ='jos_osmembership_subscribers';

    public function groupSubscriber(){
        return $this->hasMany(Group::class,'user_id');
    }
}
