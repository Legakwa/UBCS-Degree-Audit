@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add courses
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
      <form method="post" action="{{ route('courses.store') }}">
          <div class="form-group">
              @csrf
              <label for="code">Course Code:</label>
              <input type="text" class="form-control" name="course_code"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Course Name:</label>
              <input type="text" class="form-control" name="course_name"/>
          </div>

          <div class="form-group">
              <label for="credits">Credits :</label>
              <input type="number" class="form-control" name="credits"/>
          </div>

          <button type="submit" class="btn btn-primary">Add course</button>
      </form>
  </div>
</div>
@endsection