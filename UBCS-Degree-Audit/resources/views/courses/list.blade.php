@extends('layouts.layout')
@section('content')

<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Course Code</th>
    <th>Course Name</th>
    <th>Credits</th>
  </thead>
  <tbody>
    @foreach($courses as $course)
    <tr>
      <td>{{$course->id}}</td>
      <td>{{$course->course_code}}</td>
      <td>{{$course->course_name}}</td>
      <td>{{$course->credits}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
  <a class="navbar-brand" href="{{ route('courses.create') }}">
    <button type="submit" class="btn btn-primary">Back</button>
  </a>
@endsection