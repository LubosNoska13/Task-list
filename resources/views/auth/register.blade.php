@extends('layouts.app')

@section('title', 'Register')
@section('main-heading', 'Register')

@section('content')
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <x-forms.input name="name" label="Name" type="text">{{ old('name') }}</x-forms.input>
        <x-forms.input name="email" label="Email" type="email">{{ old('email') }}</x-forms.input>
        <x-forms.input name="password" label="Password" type="password" />
        <x-forms.input name="password_confirmation" label="Confirm Password" type="password" />
        <x-button class="mr-2 mt-2">Register</x-button>
        <a href="{{ route('login') }}" class="underline decoration-pink-500 text-gray-800">Already registered?</a>
    </form>
@endsection
