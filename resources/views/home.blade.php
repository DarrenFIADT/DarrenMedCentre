@extends('layouts.app')
# @Date:   2019-11-11T19:04:44+00:00
# @Last modified time: 2019-11-11T20:43:07+00:00




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

                    Medical Centre
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
