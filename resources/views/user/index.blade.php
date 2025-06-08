@extends('layouts.app')
@section('title', trans('lang.user_list'))
@section('content')


<div class="row mb-4 mt-5 ml-3 mr-3">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <h5 class="text-primary text-center ">{{trans('lang.user_list')}}</h5>
            </div>
            <div class="card-body ">
                <table class="table table-striped ">

                    <thead>
                        <tr>
                            <th class="text-primary ">{{trans('lang.name')}}</th>
                            <th class="text-primary ">{{trans('lang.email')}}</th>
                            <th class="text-primary ">{{trans('lang.student_Id')}}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)

                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->id}}</td>
                            @endforeach

                        </tr>


                    </tbody>

                </table>

                <div class="d-flex justify-content-center  ">
                    <div class="mt-4 mb-4">
                        {{$users}}
                    </div>
                </div>
            </div>





        </div>

    </div>



</div>


@endsection