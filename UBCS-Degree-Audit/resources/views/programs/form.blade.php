@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Programs
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
      <form method="post" action="{{ route('programs.store') }}">
          <div class="form-group">
              @csrf
              <label for="code">Program Code:</label>
              <input type="text" class="form-control" name="program_code"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Program Name:</label>
              <input type="text" class="form-control" name="program_name"/>
          </div>

          <div class="form-group">
              <label for="credits">Minimum Credits :</label>
              <input type="number" class="form-control" name="min_credits"/>
          </div>

          <div class="form-group">
            <label for="cgpa">Minimum CGPA :</label>
            <input type="number" class="form-control" name="min_cgpa"/>
        </div>

          <button type="submit" class="btn btn-primary">Add program</button>
      </form>
  </div>
</div>
@endsection