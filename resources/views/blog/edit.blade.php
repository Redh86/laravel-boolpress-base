@extends('layout.app')

@section('title', 'Inserimento Messaggi')

@section('content')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('blog.update', $messaggio->id) }}" method="POST">
        @csrf
        @method('put')
        <h1>Modifica il tuo messaggio</h1>
        <div class="form-group">
            <label for="nickname">Nickname</label>
            <input type="text" class="form-control" name='nickname' id="nickname">
        </div>
        <div class="form-group">
            <label for="messaggio">Messaggio</label>
            <input type="textarea" class="form-control" name='messaggio' id="messaggio">
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
    </form>

@endsection