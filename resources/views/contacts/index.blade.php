@extends('layouts.welcome')
@section('content')
    <a href="{{ route('contacts.create') }}">Novo Contato</a>
    <ul>
        @foreach($contacts as $contact)
            <li>{{ $contact->name }} - {{ $contact->email }} - {{ $contact->phone }}
                <a href="{{ route('contacts.edit', $contact) }}">Editar</a>
                <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection