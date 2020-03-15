@extends('layouts.layout')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Course Code</th>
    <th>Course Name</th>
    <th>Credits</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($courses as $course)
    <tr>
      <td>{{$course->id}}</td>
      <td>{{$course->course_code}}</td>
      <td>{{$course->course_name}}</td>
      <td>{{$course->credits}}</td>
      <td><a href="{{action('CourseController@downloadPDF', $course->id)}}">Download PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection