@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Artículo') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('posts.store')  }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <label>Título *</label>
                                <input type="text" name="title" class="form-control" required="required" />
                            </div>
                            <div class="row mt-3">
                                <label>Imagen</label>
                                <input type="file" name="file">
                            </div>
                            <div class="row mt-3">
                                <label>Contenido *</label>
                                <textarea name="body" rows="6" class="form-control" required></textarea>
                            </div>
                            <div class="row mt-3">
                                <label>Contenido embebido</label>
                                <textarea name="body"  class="form-control"></textarea>
                            </div>
                            <div class="mt-3">
                                <input type="submit" class="btn btn-primary btn-sm" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
