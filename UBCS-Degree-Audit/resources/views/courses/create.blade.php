@extends('layouts.app')

    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h3>Add a Course</h3>
                <a class=" btn btn-success" href="{{ route('courses.index') }}"> Back to courses</a>
                </div>
            </div>
        </div>

    <form action="{{ route('courses.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong> Course Code:</strong>
                    <input type="text" name="code" class="form-control" placeholder="Code">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong> Course name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong> Credits:</strong>
                    <input type="integer" name="credits" class="form-control" placeholder="Credits">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong> Course Type:</strong>
                    <input type="text" name="type" class="form-control" placeholder="Type">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong> Program:</strong>
                    <input type="text" name="program" class="form-control" placeholder="Program">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Add course</button>
            </div>
        </div>
    </form>
    @endsection