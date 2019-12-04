<?php
# @Date:   2019-11-11T17:23:22+00:00
# @Last modified time: 2019-11-11T20:48:20+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:admin');

  }




    public function index(){
      return view('admin.home');
    }
}
