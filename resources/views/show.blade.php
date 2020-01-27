@extends('layouts.app')

@section('content')
<h1>Post - ID[{{$post -> id}}]</h1>
<h3>Titolo: {{$post -> title}}</h3>
<h3>Autore: {{$post -> author}}</h3>
<h3>Categoria: {{$post -> category -> title}}</h3>
<h4>Descrizione: {{$post -> postInformation -> description }}</h4>
<h5>Tags: 
  <ul>
    @foreach ($post -> tags as $tag)
      <li>{{$tag -> tagtitle}}</li>
    @endforeach
  </ul>
  
</h5>
@endsection