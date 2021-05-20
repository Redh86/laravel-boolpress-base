@extends('layout.app')

@section('title', 'Chiacchere')

@section('content')
    <a href="{{ route('blog.create')}}" class="btn btn-primary">Inserisci un messaggio</a>
    <div>
        @foreach ($messaggi as $messaggio)
            <h1>{{$messaggio['nickname']}}</h1>
            <p>{{$messaggio['messaggio']}}</p>
            <a href="{{route('blog.edit', $messaggio->id)}}" class="btn btn-warning">Modifica</a>             
        @endforeach
  
    </div>
    
@endsection