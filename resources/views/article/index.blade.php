@extends('layouts.app')
@section('title', )
@section('content')


@forelse($articles as $article)

<div class="mx-auto card border-info mb-3" style="max-width: 600px;">

    <div class="card-header bg-transparent border-info">

        <div class="d-flex flex-row mt-4 ml-4">

            <div>
                <picture class="d-block overflow-hidden" style="width: 50px; height: 50px; border-radius: 50%">
                    <img class="w-100 h-100 object-fit-cover" src=" {{ asset('png/p.png') }}" alt="user">
                </picture>
            </div>


            <div class="d-flex flex-column mx-4">
                <h6 class="card-title text-primary text-left "><strong>{{ $article->student->name }}</strong> </h6>
                <small class="card-title text-primary text-left">Date: {{ $article->created_at->format('j F Y') }}</small>
            </div>

        </div>

        <div>
            <h5 class="card-title mt-4 text-primary text-center"><strong> {{ $article->title[app()->getLocale()] ?? $article->title['en'] ?? '' }}</strong> </h5>
        </div>
    </div>

    <div class="mx-auto p-3" style=" max-width: 500px;">
        <img class="card-img-top rounded-3 img-fluid w-100" src="{{$article->url}}" alt="Nebula">

    </div>
    <div class="d-flex flex-row justify-content-center gap-2">

        <button class="btn">
            <img src="{{ asset('png/li.png') }}" alt="Like" style="width:28px; height:28px;">
            Like
        </button>
        <button class="btn">
            <img src="{{ asset('png/share.png') }}" alt="Share" style="width:26px; height:26px;">
            Share
        </button>
        @auth
        @if($article->student && $article->student->user_id === Auth::id())
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editModal{{ $article->id }}">
            <img src="{{ asset('png/edit.png') }}" alt="Edit" style="width:26px; height:26px;">
            Edit
        </button>

        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal{{$article->id}}">
            <img src="{{ asset('png/delete.png') }}" alt="Delete" style="width:26px; height:26px;">
            Delete
        </button>
        @endif
        @endauth
    </div>


    <!-- Modal edit -->


    <div class="modal fade" id="editModal{{ $article->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $article->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('article.update', $article->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel{{ $article->id }}">Edit Article</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label class="form-label">Title EN</label>
                            <input type="text" name="title_en" class="form-control" value="{{ $article->title['en'] ?? '' }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Title FR</label>
                            <input type="text" name="title_fr" class="form-control" value="{{ $article->title['fr'] ?? '' }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content_en" class="form-control" rows="3" required>{{ $article->content['en'] ?? '' }}</textarea>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content_fr" class="form-control" rows="3" required>{{ $article->content['fr'] ?? '' }}</textarea>

                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image URL</label>
                            <input type="url" name="url" class="form-control" value="{{ $article->url }}" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>




    <!-- Modal delete -->
    <div class="modal fade" id="deleteModal{{$article->id}}" tabindex="-1" aria-labelledby="deleteModalLabel{{$article->id}}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModal{{$article->id}}">Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete
                    @if(is_array($article->title))
                    {{ $article->title[app()->getLocale()] ?? $article->title['en'] ?? '' }}
                    @else
                    {{ $article->title }}
                    @endif
                    ?


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <form method="post" action="{{route('article.destroy' , $article->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger text-white">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-row justify-content-between mx-4">

    </div>

    <div class="card-body text-black">
        <small>
            @if(is_array($article->content))
            {{ $article->content[app()->getLocale()] ?? $article->content['en'] ?? '' }}
            @else
            {{ $article->content ?? '' }}
            @endif
        </small>
    </div>


    <div class="d-flex flex-row p-3 gap-2 mb-4 justify-content-center">

        <picture class="d-block overflow-hidden" style="width: 50px; height: 50px; border-radius: 50%">
            <img class="w-100 h-100 object-fit-cover" src=" {{ asset('png/p.png') }}" alt="user">
        </picture>

        <input style=" border: 2px solid #87ceeb; width: 400px; border-radius: 15px; " type="text" placeholder="  Share your thoughts">

        <button class="btn">
            <img class="" src="{{ asset('png/send.png') }}" alt="share" style="width:35px; height:35px;">

        </button>

    </div>
</div>
@empty
@endforelse










@endsection