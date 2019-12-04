<?php
# @Date:   2019-11-04T16:32:40+00:00
# @Last modified time: 2019-11-06T12:49:20+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users()
    {
    return $this->belongsToMany('App\User');
  }




}
