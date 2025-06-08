@extends('layouts.app')
@section('title', trans('lang.user_registration'))
@section('content')



<h3 class="mb-5 mt-5 text-primary text-center ">{{trans('lang.user_registration')}}</h3>

<div class="d-flex  justify-content-center">

    <div class="card border-info mb-3 mt-3" style="flex-basis: 400px;">
        <div class="card-header bg-transparent border-info">

        </div>

        <div class="card-body text-primary ">

            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{trans('lang.name')}}</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name')}}">
                    @if($errors->has('name'))
                    <div class="text-danger small mt-2">
                        {{ $errors->first('name')}}
                    </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{trans('lang.email')}}</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email')}}">
                    @if($errors->has('email'))
                    <div class="text-danger small mt-2">
                        {{ $errors->first('email')}}
                    </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">{{trans('lang.password')}}</label>
                    <input type="password" id="pwd" name="password" class="form-control">
                    @if($errors->has('password'))
                    <div class="text-danger small mt-2">
                        {{ $errors->first('password')}}
                    </div>
                    @endif
                </div>

                <div class="mt-2 card-footer bg-transparent border-info d-flex justify-content-center ">
                    <button type="submit" class="btn mt-3 btn-success">{{trans('lang.save')}}</button>
                </div>
            </form>


            </form>

        </div>

    </div>

</div>

@endsection