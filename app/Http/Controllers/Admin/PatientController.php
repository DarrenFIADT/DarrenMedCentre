<?php
# @Date:   2019-12-03T14:41:47+00:00
# @Last modified time: 2019-12-04T22:14:23+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Patient;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $patients = Patient::all();

      return view('admin.patients.index')->with([
        'patients' => $patients
      ]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.patients.create');

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
            'insurance' => 'required',
            'insurance_name' => 'required',
            'policy_number' => 'required'


           ]);

               $patient = new Patient();
               $patient->name = $request->input('name');
               $patient->address = $request->input('address');
               $patient->phone = $request->input('phone');
               $patient->email = $request->input('email');
               $patient->insurance = $request->input('insurance');
               $patient->insurance_name = $request->input('insurance_name');
               $patient->policy_number = $request->input('policy_number');

               $patient->save();

               return redirect()->route('admin.patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $patient = Patient::findOrFail($id);

    return view('admin.patients.show')->with([
      'patients' => $patients
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
      $patient = Patient::findOrFail($id);

    return view('admin.patients.edit')->with([
      'patient' => $patient
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
      $patient = Patient::findOrFail($id);

      $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'insurance' => 'required',
            'insurance_name' => 'required',
            'policy_number' => 'required'


           ]);

               $patient->name = $request->input('name');
               $patient->address = $request->input('address');
               $patient->phone = $request->input('phone');
               $patient->email = $request->input('email');
               $patient->insurance = $request->input('insurance');
               $patient->insurance_name = $request->input('insurance_name');
               $patient->policy_number = $request->input('policy_number');

               $patient->save();

               return redirect()->route('admin.patients.index');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $patient = Patient::findOrFail($id);

      $patient->delete();
      return redirect()->route('admin.patients.index');

    }
}
