@extends('layouts.app')

@section('title', 'Login')
@section('main-heading', 'Login')

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <x-forms.input name="name" type="text">{{ old('name') }}</x-forms.input>
        <x-forms.input name="password" type="password" />
        <x-button class="mr-2 mt-2">Login</x-button>
        <a href="{{ route('register') }}" class="underline decoration-pink-500 text-gray-800">Create an account</a>
    </form>
@endsection
