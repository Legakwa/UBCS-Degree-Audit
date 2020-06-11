@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
   Link Courses and Programs
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('course_programs.store') }}">
          <div class="form-group">
              @csrf
              <label for="program_code">Program Code:</label>
              <input type="text" class="form-control" name="program_code"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="course_code">Course Code:</label>
              <input type="text" class="form-control" name="course_code"/>
          </div>

          <div class="form-group">
              <label for="year">Year:</label>
              <input type="number" class="form-control" name="year"/>
          </div>

          <div class="form-group">
            <label for="course_type">Course Type:</label>
            <input type="number" class="form-control" name="course_type"/>
        </div>

          <button type="submit" class="btn btn-primary">Add course</button>
      </form>
  </div>
</div>
@endsection