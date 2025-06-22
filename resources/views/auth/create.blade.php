@extends('layouts.app')
@section('title', 'Login')
@section('content')



<h3 class="mb-5 mt-5 text-primary text-center ">{{trans('lang.login')}}</h3>

<div class="d-flex  justify-content-center">

    <div class="card border-info mb-3 mt-3" style="flex-basis: 400px;">
        <div class="card-header bg-transparent border-info">

        </div>

        <div class="card-body text-primary ">

            <form method="post">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email')}}">
                    @if($errors->has('email'))
                    <div class="text-danger small mt-2">
                        {{ $errors->first('email')}}
                    </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">{{trans('lang.passw')}}</label>
                    <input type="password" id="pwd" name="password" class="form-control">
                    @if($errors->has('password'))
                    <div class="text-danger small mt-2">
                        {{ $errors->first('password')}}
                    </div>
                    @endif
                </div>

                <div class="mt-2 card-footer bg-transparent border-info d-flex justify-content-center ">
                    <button type="submit" class="btn mt-3 btn-success">{{trans('lang.login')}}</button>
                </div>
            </form>


            </form>

        </div>

    </div>

</div>

@endsection