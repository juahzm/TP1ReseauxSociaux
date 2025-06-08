@extends('layouts.app')
@section('title', trans('lang.title_students'))
@section('content')

<!-- {{$students}} -->

<h3 class="mb-5 mt-5 text-primary text-center ">{{trans('lang.title_students')}}</h3>

<!-- @if(session('success'))
<div class="ml-1 mt-4 mr-1 mb-4 alert alert-success  alert-dismissible fade show" role="alert">
    <strong>{{session('success')}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif -->



<div class="d-flex flex-row flex-wrap gap-5 justify-content-center ">

    @forelse($students as $student)

    <div class="card border-info mb-3" style="max-width: 18rem;">
        <div class="card-header bg-transparent border-info">
            <h6 class="card-title text-primary text-center"><strong>{{trans('lang.student_Id')}}</strong> {{ $student->id }}</h6>
        </div>

        <div class="card-body text-primary">
            <p class="card-text text-muted"><strong>{{trans('lang.name')}}</strong> {{ $student->name }}</p>
            <p class="card-text text-muted"><strong>{{trans('lang.phone')}}</strong> {{ $student->phone }}</p>
        </div>
        <div class="card-footer bg-transparent border-info d-flex justify-content-center ">

            <a href="{{route('student.show', $student->id)}}" class="btn btn-sm btn-outline-primary">{{trans('lang.more')}}</a>
        </div>
    </div>
    @empty
    <div class="alert alert-danger">Sorry, there is no Student on this list!</div>

    @endforelse

</div>


@endsection