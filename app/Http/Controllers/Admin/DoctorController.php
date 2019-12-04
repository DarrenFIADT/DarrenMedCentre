<?php
# @Date:   2019-12-03T15:05:59+00:00
# @Last modified time: 2019-12-04T19:05:53+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('role:admin');

  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('admin.doctors.index')->with([
          'doctors' => $doctors

        ]);
      }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 $request->validate([
           'name' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'created' => 'required'

      ]);

          $doctor = new Doctor();
          $doctor->name = $request->input('name');
          $doctor->address = $request->input('address');
          $doctor->phone = $request->input('phone');
          $doctor->email = $request->input('email');
          $doctor->created = $request->input('created');

          $doctor->save();

          return redirect()->route('admin.doctors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $doctor = Doctor::findOrFail($id);

    return view('admin.doctors.show')->with([
      'doctor' => $doctor
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $doctor = Doctor::findOrFail($id);

    return view('admin.doctors.edit')->with([
      'doctor' => $doctor
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $doctor = Doctor::findOrFail($id);


      $request->validate([

          'name' => 'required',
          'address' => 'required',
          'phone' => 'required',
          'email' => 'required',
          'created' => 'required'
           ]);

           $doctor->name = $request->input('name');
           $doctor->address = $request->input('address');
           $doctor->phone = $request->input('phone');
           $doctor->email = $request->input('email');
           $doctor->created = $request->input('created');

           $doctor->save();

           return redirect()->route('admin.doctors.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $doctor = Doctor::findOrFail($id);

      $doctor->delete();

      return redirect()->route('admin.doctors.index');
    }
}
