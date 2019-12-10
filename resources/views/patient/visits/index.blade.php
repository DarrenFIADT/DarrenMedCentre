@extends('layouts.app')
# @Date:   2019-12-09T17:18:37+00:00
# @Last modified time: 2019-12-10T13:11:19+00:00




@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          Upcoming Appointment

        </div>
       <div class="card-body">
         @if (count($visits) === 0)
         <p>There are no Appointments ! </p>
         @else
          <table id="table-visits" class="table table-hover">
            <thead>
              <th>Doctor</th>
              <th>Description</th>
              <th>Patient</th>
              <th>Time</th>
              <th>Date</th>
              <th>Cost</th>

            </thead>
            <tbody>
              @foreach ($visits as $visit)
              <tr data=id="{{$visit->id}}">
              <td>{{  $visit->name  }}</td>
              <td>{{  $visit->description }}</td>
              <td>{{  $visit->name  }}</td>
              <td>{{  $visit->time  }}</td>
              <td>{{  $visit->date  }}</td>
              <td>{{  $visit->cost  }}</td>

            </tr>
              @endforeach
            </tbody>
          </table>
          @endif
       </div>
      </div>
     </div>
    </div>
   </div>
@endsection
