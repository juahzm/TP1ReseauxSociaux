@extends('layouts.app')
@section('title', 'Edit Student')
@section('content')



<h3 class="mb-5 mt-5 text-primary text-center ">Edit Student</h3>

<div class="d-flex  justify-content-center">

    <div class="card border-info mb-3 mt-3" style="flex-basis: 400px;">
        <div class="card-header bg-transparent border-info">

        </div>

        <div class="card-body text-primary ">
            <!-- {{$student}} -->
            <form method="post">
                @method('put')
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">name</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{old('name', $student->name)}}">
                    @if($errors->has('name'))
                    <div class="text-danger small mt-2">
                        {{ $errors->first('name')}}
                    </div>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" id="address" name="address" class="form-control" value="{{old('address', $student->address)}}">
                    @if($errors->has('address'))
                    <div class="text-danger mt-2 small">
                        {{ $errors->first('address')}}
                    </div>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">phone</label>
                    <input type="text" id="phone" name="phone" class="form-control" value="{{old('phone', $student->phone)}}">
                    @if($errors->has('phone'))
                    <div class="text-danger mt-2 small">
                        {{ $errors->first('phone')}}
                    </div>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">e-mail</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{old('email', $student->email)}}">
                    @if($errors->has('email'))
                    <div class="text-danger mt-2 small">
                        {{ $errors->first('email')}}
                    </div>
                    @endif
                </div>
                <div class="mb-2">
                    <label for="date" class="form-label">Birthdate</label>
                    <input type="date" id="date" name="date" class="form-control" value="{{old('date', $student->date)}}">
                    @if($errors->has('date'))
                    <div class="text-danger mt-2 small">
                        {{ $errors->first('date')}}
                    </div>
                    @endif
                </div>
                <div class="mb-2">
                    <div class="mb-3">
                        <label for="city_id" class="text-primary">City
                            <select name="city_id" id="city_id" class=" mt-1 form-select">
                                @foreach($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>


                </div>

                <div class="mt-2 card-footer bg-transparent border-info d-flex justify-content-between ">

                    <button type="submit" class="btn btn-success text-white">Save</button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection