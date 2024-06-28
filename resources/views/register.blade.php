@extends('layouts.app')

@section('title', 'Register')
@section('main-heading', 'Register')

@section('content')
    <form action="{{ route('registerDb') }}" method="POST">
        @csrf
        <x-forms.input name="name">{{ old('name') }}</x-forms.input>
        <x-forms.input name="email" type="email">{{ old('email') }}</x-forms.input>
        <x-forms.input name="password" type="password" />
        <x-button class="mr-2">Register</x-button>
        <a href="{{ route('register') }}" class="underline decoration-pink-500 text-gray-800">Create an account</a>
    </form>
@endsection
