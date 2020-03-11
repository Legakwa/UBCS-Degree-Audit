@extends('layouts.app')

    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h3>Courses</h3>
                <a class=" btn btn-success" href="{{ route('courses.create') }}"> Create new course</a>
                </div>
            </div>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success">
            <p> {{ $message }}</p>
            </div>
        @endif
    @endsection