@extends('programs.layout')
    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h3>Add a Program</h3>
                <a class=" btn btn-success" href="{{ route('programs.index') }}"> Back to programs</a>
                </div>
            </div>
        </div>

    <form action="{{ route('programs.index')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong> Program Code:</strong>
                    <input type="text" name="code" class="form-control" placeholder="Code">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong> Program name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
    @endsection