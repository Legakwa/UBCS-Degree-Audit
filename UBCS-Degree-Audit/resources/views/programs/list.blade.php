@extends('layouts.layout')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Program Code</th>
    <th>Program Name</th>
    <th>Minimum Credits</th>
    <th>Minimum CGPA</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($programs as $program)
    <tr>
      <td>{{$program->id}}</td>
      <td>{{$program->program_code}}</td>
      <td>{{$program->program_name}}</td>
      <td>{{$program->min_credits}}</td>
      <td>{{$program->min_cgpa}}</td>
      <td><a href="{{action('ProgramController@downloadPDF', $program->id)}}">Download PDF</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection