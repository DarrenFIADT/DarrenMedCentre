@extends('layouts.app')
# @Date:   2019-11-11T20:41:38+00:00
# @Last modified time: 2019-11-11T21:07:47+00:00




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

                    You are logged in as a doctor!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
