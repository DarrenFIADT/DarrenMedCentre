<?php
# @Date:   2019-11-11T19:04:44+00:00
# @Last modified time: 2019-12-09T22:52:31+00:00




namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      $user = $request->user();
      $home = 'user.home';

      if ($user->hasRole('admin')) {
      $home = 'admin.home';
      }
      else if ($user->hasRole('doctor')) {
        $home = 'doctor.home';
      }
      else if ($user->hasRole('patient')) {
        $home = 'patient.home';
      }
      else {
        $home = 'user.home';
      }
        return redirect()->route($home);
    }
}
