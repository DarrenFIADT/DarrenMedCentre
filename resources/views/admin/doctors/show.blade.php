@extends('layouts.app')
# @Date:   2019-12-04T17:19:05+00:00
# @Last modified time: 2019-12-04T17:24:46+00:00




@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="card">
        <div class="card-header">
          Doctor: {{ $doctor->name }}
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <tbody>
                    <tr>
                      <td>Name</td>
                      <td>{{ $doctor->name }}</td>
                    </tr>
                    <tr>
                      <td>Author</td>
                      <td>{{ $doctor->address }}</td>
                    </tr>
                    <tr>
                      <td>Publisher</td>
                      <td>{{ $doctor->phone }}</td>
                    </tr>
                    <tr>
                      <td>Year</td>
                      <td>{{ $doctor->email }}</td>
                    </tr>
                    <tr>
                      <td>ISBN</td>
                      <td>{{ $doctor->created }}</td>
                    </tr>

                </tbody>
            </table>

            <a href="{{ route('admin.doctors.index') }}" class="btn btn-default">Back</a>
            <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
            <form style="display:inline-block" method="POST" action="{{ route('admin.doctors.destroy', $doctor->id) }}">
              <input type="hidden" name="_method" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="form-control btn btn-danger">Delete</a>
           </form>
        </div>
      </div>



    </div>
  </div>
</div>
@endsection
