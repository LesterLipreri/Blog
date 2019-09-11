@extends('layouts.blog')


@section('contenido')

<!-- Blog Entries Column -->
<div class="col-md-12">

        <h1 class="my-4">Blog de Prueba
          <small>Hecho con Laravel y Bootstrap</small>
        </h1>

        @foreach ($posts as $post)

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="{{$post->foto}}" alt="Card image cap" style="witdh:200px">
          <div class="card-body">
            <h2 class="card-title">{{$post->titulo}}</h2>
          <p class="card-text">{{$post->descripcion}}</p>
          <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Leer mas &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on {{$post->created_at}}
          <a href="#">{{$post->user->name}}</a>
          </div>
        </div>
        @endforeach

        <!-- Pagination -->
        {{$posts->links()}}

      </div>

@endsection

