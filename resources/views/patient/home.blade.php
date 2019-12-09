@extends('layouts.app')
# @Date:   2019-11-11T20:42:21+00:00
# @Last modified time: 2019-12-09T22:38:39+00:00




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as a patient!
                    Book an appointment now
                    <br>
                    <a href="{{route('patient.visits.create') }}"> Book </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
