<?php
# @Date:   2019-12-09T18:09:42+00:00
# @Last modified time: 2019-12-09T18:09:46+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
  public function Doctor(){
    return $this->belongsTo('App\Doctor'); //visit has one doctor
  }

  public function Patient(){
    return $this->belongsTo('App\Patient'); //visit has one patient
  }
}
