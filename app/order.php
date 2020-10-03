<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    protected $guarded=[];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function orderItems(){
        return $this->hasMany('App\orderItems');

    }
    public function products(){
        return $this->belongsToMany('App\product','order_items');
    }
}
