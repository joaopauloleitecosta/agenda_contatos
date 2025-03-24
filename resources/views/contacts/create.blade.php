@extends('layouts.welcome')
@section('content')
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Telefone" required>
        <button type="submit">Salvar</button>
    </form>
@endsection