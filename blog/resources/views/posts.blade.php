@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($posts as $post)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <div class="card-text">
                                {{$post->get_excerpt}}
                                <a href="{{ route('post', $post) }}">Leer más</a>
                            </div>
                            <div class="text-muted mb-0">
                                <em>
                                    &ndash; {{ $post->user->name }}
                                </em>
                                {{ $post->created_at->format('d M Y') }}
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
