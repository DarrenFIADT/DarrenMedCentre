<?php
# @Date:   2019-11-11T19:30:45+00:00
# @Last modified time: 2019-12-09T22:53:21+00:00




use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_doctor = new Role();
      $role_doctor->name = 'doctor';
      $role_doctor->description = 'A Doctor';
      $role_doctor->save();

        $role_patient = new Role();
        $role_patient->name = 'patient';
        $role_patient->description = 'A regular patient';
        $role_patient->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An administrator user';
        $role_admin->save();
    }
}
