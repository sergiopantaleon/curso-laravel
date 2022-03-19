@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Artículo') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Título</label>
                                <input type="text" name="title" class="form-control" required value="{{ old('title', $post->title) }}">
                            </div>
                            <div class="mb-3">
                                <label>Imagen</label>
                                <input type="file" name="file">
                            </div>
                            <div class="mb-3">
                                <label>Contenido *</label>
                                <textarea name="body" rows="6" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Contenido Embebido</label>
                                <textarea name="iframe" rows="6" class="form-control">{{ old('iframe', $post->iframe) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
