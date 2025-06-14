@extends('layouts.app')
@section('title' )
@section('content')


<div class="mx-auto card border-info mb-3" style="max-width: 600px;">

    <div>
        <h5 class="card-title mt-4 text-primary text-center"> Create Article</h5>
    </div>

    <div class="d-flex flex-row mt-4 ml-4">

        <form method="post">

            @csrf
            <div class="mb-2 p-3">
                <label for="title" class="form-label text-primary">Title</label>
                <input style=" border: 2px solid #87ceeb; width: 550px; border-radius: 15px;" type=" text" id="title" name="title" class="form-control">
                @if($errors->has('title'))
                <div class="text-danger small mt-2">
                    {{ $errors->first('title')}}
                </div>
                @endif
            </div>

            <div class="mb-2 p-3">
                <label for="content" class="form-label text-primary">Content</label>
                <input style=" border: 2px solid #87ceeb; width: 550px; height: 100px; border-radius: 15px;" type=" text" id="content" name="content" class="form-control">
                @if($errors->has('content'))
                <div class="text-danger small mt-2">
                    {{ $errors->first('content')}}
                </div>
                @endif
            </div>

            <div class="mb-2 p-3">
                <label for="url" class="form-label text-primary">Image url</label>
                <input style=" border: 2px solid #87ceeb; width: 550px; border-radius: 15px;" type=" text" id="url" name="url" class="form-control">
                @if($errors->has('url'))
                <div class="text-danger small mt-2">
                    {{ $errors->first('url')}}
                </div>
                @endif
            </div>

            <div class="d-flex justify-content-center bg-transparent border-info card-footer ">

                <button type="submit" class="btn">
                    <img class="" src="{{ asset('png/send.png') }}" alt="share" style="width:45px; height:45px;">
                </button>

            </div>

        </form>

    </div>

</div>



@endsection