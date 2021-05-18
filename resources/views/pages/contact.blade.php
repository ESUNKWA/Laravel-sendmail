@extends('welcome')

@section('content')
    <h1>Envoyer nous un email</h1>
@if (count($errors) > 0)
    {{ $errors }}
@endif
    
    <form action="/send-email" method="post">
        @csrf
        <label for="name">Nom</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email">
        <br><br>
        <label for="msg">Message</label>
        <textarea name="msg" id="msg" rows="3">{{ old('msg') }}</textarea>
        <button type="submit">Envoyer</button>
    </form>
@endsection