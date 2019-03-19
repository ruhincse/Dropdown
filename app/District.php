<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function thanas(){
    	return $this->hasMany('App\Thana');
    }
}
