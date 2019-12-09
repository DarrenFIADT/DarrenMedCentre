@extends('layouts.app')
# @Date:   2019-12-04T19:12:53+00:00
# @Last modified time: 2019-12-09T20:07:51+00:00



@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
        Edit Patient
        </div>
        <div class="card-body">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="{{route('admin.patients.update', $patient->id)}}" >
        <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="form-group">
            <label for ="name">Name </label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name', $patient->name)}}"/>
          </div>

          <div class="form-group">
            <label for ="email">Email-Address </label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email', $patient->email)}}"/>
          </div>
          <div class="form-group">
            <label for ="password">Password </label>
            <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}"/>
          </div>
          <div class="form-group">
            <label for ="address">Address </label>
            <input type="text" class="form-control" id="address" name="address" value="{{old('address', $patient->address)}}"/>
          </div>

          <div class="form-group">
            <label for ="phone">Phone Number </label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone', $patient->phone)}}"/>
          </div>

          <div class="form-group">
            <label for ="insurance">Insurance Company </label>
            <input type="text" class="form-control" id="insurance" name="insurance" value="{{old('insurance',$patient->insurance)}}"/>
          </div>

          <div class="form-group">
            <label for ="policy_number">Policy Number </label>
            <input type="text" class="form-control" id="policy_number" name="policy_number" value="{{old('policy_number',$patient->policy_number)}}"/>
          </div>

          <a href="{{route ('admin.patients.index')}}" class="btn btn-link">Cancel</a>
          <button type="submit" class="btn btn-primary float-right">Submit</button>


        </form>
      </div>

    </div>

  </div>

</div>
</div>

@endsection
