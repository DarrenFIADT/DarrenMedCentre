@extends('layouts.app')

# @Date:   2019-12-03T15:14:28+00:00
# @Last modified time: 2019-12-04T21:19:49+00:00



@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Add new Patient
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
        <form method="POST" action="{{route('admin.patients.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

          <div class="form-group">
            <label for ="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}"/>
          </div>

          <div class="form-group">
            <label for ="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}"/>
          </div>

          <div class="form-group">
            <label for ="phone"> Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}"/>
          </div>

          <div class="form-group">
            <label for ="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}"/>
          </div>

          <div class="form-group">
            <label for ="insurance">Do You Have Insurance?</label>
            <br>
            <input type="radio" class=" radio-inline " id="insurance" name="insurance"> Yes </label>
            <br>
            <input type="radio" class=" radio-inline" id="insurance" name="insurance"> No </label>

          </div>


          <div class="form-group">
            <label for ="insurance_name">Insurance Nme</label>
            <input type="text" class="form-control" id="insurance_name" name="insurance_name" value="{{old('insurance_name')}}"/>
          </div>

          <div class="form-group">
            <label for ="policy_number">Policy number</label>
            <input type="text" class="form-control" id="policy_number" name="policy_number" value="{{old('policy_number')}}"/>
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
