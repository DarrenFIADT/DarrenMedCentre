<?php
# @Date:   2019-11-11T20:45:37+00:00
# @Last modified time: 2019-12-09T22:54:34+00:00




namespace App\Http\Controllers\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Doctor;
class HomeController extends Controller
{

  public function __construct()
  {
        $this->middleware('auth');
        $this->middleware('role:doctor');
  }


  public function index()
  {
    return view('doctor.home');
  }
}
