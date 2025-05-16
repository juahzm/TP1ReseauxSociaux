@extends('layouts.app')
@section('title', 'Create Student')
@section('content')



<h3 class="mb-5 mt-5 text-primary text-center ">Create Student</h3>

<div class="d-flex  justify-content-center">

    <div class="card border-info mb-3 mt-3" style="flex-basis: 400px;">
        <div class="card-header bg-transparent border-info">

        </div>

        <div class="card-body text-primary ">

            <form method="post">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" id="address" name="address" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">phone</label>
                    <input type="text" id="phone" name="phone" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="phone" class="form-label">e-mail</label>
                    <input type="email" id="email" name="e-mail" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="date" class="form-label">Birthdate</label>
                    <input type="date" id="date" name="date" class="form-control">
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