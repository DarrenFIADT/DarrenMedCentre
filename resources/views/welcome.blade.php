@extends('layouts.app')
# @Date:   2019-11-05T13:36:58+00:00
# @Last modified time: 2019-12-04T19:25:46+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    Welcome to our Medical Centre <a href="{{ route('admin.doctors.index') }}"> Doctors</a>
                    <br>
                    <a href="{{ route('admin.patients.index') }}"> patients</a>
                    <br>
                    Learn more <a href="{{ route('about') }}">about us</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
