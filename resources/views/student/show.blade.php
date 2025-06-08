@extends('layouts.app')
@section('title', trans('lang.student'))
@section('content')

<!-- {{$student}} -->


<h3 class="mb-5 mt-5 text-primary text-center ">{{trans('lang.student')}}</h3>





<div class="d-flex  justify-content-center">

    <div class="card border-info mb-3 mt-3" style="max-width: 28rem;">
        <div class="card-header bg-transparent border-info">
            <h6 class="card-title text-primary text-center"><strong></strong> {{ $student->name }}</h6>
        </div>

        <div class="card-body text-primary text-center">
            <p class="card-text text-muted"><strong>{{trans('lang.phone')}}: </strong> {{ $student->phone }}</p>
            <p class="card-text text-muted"><strong>{{trans('lang.email')}}: </strong> {{ $student->email }}</p>
            <p class="card-text text-muted"><strong>{{trans('lang.birthday')}}: </strong> {{ $student->date }}</p>
            <p class="card-text text-muted"><strong>{{trans('lang.city')}}: </strong> {{ $student->city->name }}</p>
        </div>
        <div class="card-footer bg-transparent border-info d-flex justify-content-between ">

            <a href="{{route('student.edit', $student->id)}}" class="btn btn-success text-white">{{trans('lang.edit')}}</a>
            <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                {{trans('lang.delete')}}
            </button>




        </div>
    </div>


    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{trans('lang.modal_delete1')}}{{$student->name}} {{trans('lang.modal_delete2')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <form method="post">
                        @method('delete')
                        @csrf

                        <button type="submit" class="btn btn-danger text-white">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection