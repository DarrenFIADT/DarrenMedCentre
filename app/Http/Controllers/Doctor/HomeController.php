<?php
# @Date:   2019-11-11T17:23:22+00:00
# @Last modified time: 2019-11-11T21:01:16+00:00




namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:doctors');

  }




    public function index(){
      return view('doctors.home');
    }
}
