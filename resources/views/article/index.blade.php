@extends('layouts.app')
@section('title', )
@section('content')


@forelse($articles as $article)

<div class="mx-auto card border-info mb-3" style="max-width: 600px;">

    <div class="card-header bg-transparent border-info">
        <h6 class="card-title text-primary text-center"><strong></strong> {{ $article->title }}</h6>
    </div>

    <div class="mx-auto p-3" style=" max-width: 500px;">
        <img class="card-img-top rounded-3 img-fluid w-100" src="{{$article->url}}" alt="Nebula">

    </div>

    <div class="d-flex flex-row justify-content-between mx-4">
        <h6 class="card-title text-primary text-center"><strong>Student: </strong> {{ $article->student->name }}</h6>
        <h6 class="card-title text-primary text-center"><strong>Date: </strong>{{ $article->created_at->format('j F Y') }}</h6>
    </div>

    <div class="card-body text-black">
        <small>{{ $article->content }}</small>
    </div>
</div>
@empty
@endforelse



@endsection