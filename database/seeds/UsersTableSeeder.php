<?php
# @Date:   2019-11-11T19:30:01+00:00
# @Last modified time: 2019-11-11T21:10:00+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_doctor = Role::where('name', 'doctor')->first();
      $role_admin = Role::where('name', 'admin')->first();
      $role_patient = Role::where('name', 'patient')->first();

      $doctor = new User();
      $doctor->name = 'Doctor Jim Jones';
      $doctor->email = 'doc@docjjmed.ie';
      $doctor->password = bcrypt('secret');
      $doctor->save();
      $doctor->roles()->attach($role_doctor);

      $patient = new User();
      $patient->name = 'Mr Alex Kelly';
      $patient->email = 'patient@patakmed.ie';
      $patient->password = bcrypt('secret');
      $patient->save();
      $patient->roles()->attach($role_patient);

      $admin = new User();
      $admin->name = 'Darren Fagan';
      $admin->email = 'darren@admdoctor.ie';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);
    }
}
