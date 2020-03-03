@extends('programs.layout')
    @section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h3>Program Structure</h3>
                <a class=" btn btn-success" href="{{ route('programs.create') }}"> Create new program</a>
                </div>
            </div>
        </div>
    @endsection