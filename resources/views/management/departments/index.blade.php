@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1 class="">Departments</h1>

        </div>
        <div class="col-md-6" >
            <a href="{{ route('departmentsCreate') }}" class="btn btn-dark float-right mt-2">
                Create new Department
            </a>
        </div>
    </div>


@endsection
