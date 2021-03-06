@extends('layouts.app')
# @Date:   2019-12-09T17:06:38+00:00
# @Last modified time: 2019-12-10T13:13:52+00:00




@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          <p>Visit:</p>
        </div>
       <div class="card-body">
          <table class="table table-hover">
            <tbody>
                @foreach ($visits as $visit)
              <tr>
                <td>Title</td>
                  <td>{{ $visit->name }}</td>
              </tr>
              <tr>
                <td>Description</td>
                  <td>{{ $visit->description }}</td>
              </tr>
              <tr>
                <td>Patient</td>
                  <td>{{ $visit->name }}</td>
              </tr>
              <tr>
                <td>Time</td>
                  <td>{{ $visit->time }}</td>
              </tr>
              <tr>
                <td>Date</td>
                  <td>{{$visit->date }}</td>
              </tr>
              <tr>
                <td>Cost</td>
                  <td>{{ $visit->cost }}</td>
              </tr>
            </tbody>

          </table>

          <a href="{{route ('doctor.visits.index') }}" class="btn btn-default">Back</a>
          <a href="{{route ('doctor.visits.edit', $visit->id) }}" class="btn btn-warning">Edit</a>
          <form style="display:inline-block" method="POST" action="{{ route ('doctor.visits.destroy', $visit->id)   }}">

          </form>
@endforeach
       </div>
      </div>
     </div>
    </div>
   </div>
@endsection
