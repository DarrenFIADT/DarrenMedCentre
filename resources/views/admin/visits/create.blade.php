@extends('layouts.app')
# @Date:   2019-12-09T17:09:51+00:00
# @Last modified time: 2019-12-09T19:27:43+00:00



@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Add new appointment
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
        <form method="POST" action="{{route('admin.visits.store')}}" >
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
          <label for ="doctor">Doctor</label>
          <select name="doctor_id">
           @foreach ($doctors as $doctor)
            <option value = "{{ $doctor->id }}" {{ (old('doctor_id') == $doctor->id) ? "selected " : "" }} >
              {{ $doctor->name   }}
            </option>
          @endforeach
          </select>

          <div class="form-group">
            <label for ="description">Description </label>
            <input type="text" class="form-control" id="description" name="description" value="{{old('description')}}"/>
          </div>

          <div class="form-group">
            <label for ="patient">Patient </label>
            <select name="patient_id">
             @foreach ($patients as $patient)
              <option value = "{{ $patient->id }}" {{ (old('patient_id') == $patient->id) ? "selected " : "" }} >
                {{ $patient->name   }}
              </option>
            @endforeach
            </select>

          <div class="form-group">
            <label for ="date">Date </label>
            <input type="text" class="form-control" id="date" name="date" value="{{old('date')}}" placeholder="YYYY-MM-DD"/>
          </div>

          <div class="form-group">
            <label for ="time">Time </label>
            <input type="text" class="form-control" id="time" name="time" value="{{old('time')}}" placeholder="00:00:00"/>
          </div>

          <div class="form-group">
            <label for ="cost">Cost </label>
            <input type="text" class="form-control" id="cost" name="cost" value="{{old('cost')}}"/>
          </div>

          <a href="{{route ('admin.visits.index')}}" class="btn btn-link">Cancel</a>
          <button type="submit" class="btn btn-primary float-right">Submit</button>


        </form>
      </div>

    </div>

  </div>

</div>
</div>

@endsection
