@extends('layouts.welcome')
@section('content')
    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf @method('PUT')
        <input type="text" name="name" value="{{ $contact->name }}" required>
        <input type="email" name="email" value="{{ $contact->email }}" required>
        <input type="text" name="phone" value="{{ $contact->phone }}" required>
        <button type="submit">Atualizar</button>
    </form>
@endsection
