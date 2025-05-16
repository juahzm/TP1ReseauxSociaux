@extends('layouts.app')
@section('title', 'Single Student')
@section('content')

<!-- {{$student}} -->


<h3 class="mb-5 mt-5 text-primary text-center ">Student</h3>

<div class="d-flex  justify-content-center">

    <div class="card border-info mb-3 mt-3" style="max-width: 28rem;">
        <div class="card-header bg-transparent border-info">
            <h6 class="card-title text-primary text-center"><strong></strong> {{ $student->name }}</h6>
        </div>

        <div class="card-body text-primary text-center">
            <p class="card-text text-muted"><strong>Phone:</strong> {{ $student->phone }}</p>
            <p class="card-text text-muted"><strong>e-mail:</strong> {{ $student->email }}</p>
            <p class="card-text text-muted"><strong>Birthdate:</strong> {{ $student->date }}</p>
            <p class="card-text text-muted"><strong>City:</strong> {{ $student->city->name }}</p>
        </div>
        <div class="card-footer bg-transparent border-info d-flex justify-content-between ">

            <a href="" class="btn btn-success text-white">Edit</a>
            <a href="" class="btn btn-danger text-white">Delete</a>
        </div>
    </div>

</div>
@endsection